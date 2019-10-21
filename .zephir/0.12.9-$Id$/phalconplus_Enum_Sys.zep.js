[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Enum",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Enum\\AbstractEnum",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                "line": 3,
                "char": 34
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
        "line": 5,
        "char": 5
    },
    {
        "type": "class",
        "name": "Sys",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractEnum",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private",
                        "static"
                    ],
                    "type": "property",
                    "name": "rootDir",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 18,
                        "char": 30
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 19,
                    "char": 11
                },
                {
                    "visibility": [
                        "private",
                        "static"
                    ],
                    "type": "property",
                    "name": "primaryModuleDir",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 19,
                        "char": 39
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 21,
                    "char": 10
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "init",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "moduleDir",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 21,
                            "char": 50
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
                                        "type": "list",
                                        "left": {
                                            "type": "static-property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 23,
                                                "char": 41
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "primaryModuleDir",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 23,
                                                "char": 41
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 23,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 23,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 23,
                                    "char": 43
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 23,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 25,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 26,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "moduleDir",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "rtrim",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "moduleDir",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 26,
                                                    "char": 40
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 26,
                                                "char": 40
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "self",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 26,
                                                        "char": 50
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "DS",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 26,
                                                        "char": 50
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 26,
                                                    "char": 50
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 26,
                                                "char": 50
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 26,
                                        "char": 51
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 26,
                                    "char": 51
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 27,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_dir",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "moduleDir",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 27,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 27,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 27,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 27,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Base\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "Module directory not exists or not a dir, file positon: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 28,
                                                        "char": 108
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "moduleDir",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 28,
                                                        "char": 119
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 28,
                                                    "char": 119
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 28,
                                                "char": 119
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 28,
                                        "char": 120
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 29,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 30,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "static-property",
                                    "operator": "assign",
                                    "variable": "self",
                                    "property": "primaryModuleDir",
                                    "expr": {
                                        "type": "variable",
                                        "value": "moduleDir",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 30,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 30,
                                    "char": 47
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 31,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "static-property",
                                    "operator": "assign",
                                    "variable": "self",
                                    "property": "rootDir",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "dirname",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "moduleDir",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 31,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 31,
                                                "char": 46
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 31,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 31,
                                    "char": 47
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 32,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 33,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 21,
                    "last-line": 36,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getPrimaryModuleDir",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "concat",
                                "left": {
                                    "type": "static-property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "self",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 38,
                                        "char": 39
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "primaryModuleDir",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 38,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 38,
                                    "char": 39
                                },
                                "right": {
                                    "type": "static-constant-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "self",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 38,
                                        "char": 49
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "DS",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 38,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 38,
                                    "char": 49
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 38,
                                "char": 49
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 39,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 37,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 37,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 36,
                    "last-line": 42,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getRootDir",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "concat",
                                "left": {
                                    "type": "static-property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "self",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 44,
                                        "char": 30
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "rootDir",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 44,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 44,
                                    "char": 30
                                },
                                "right": {
                                    "type": "static-constant-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "self",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 44,
                                        "char": 40
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "DS",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 44,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 44,
                                    "char": 40
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 44,
                                "char": 40
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 45,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 43,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 43,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 42,
                    "last-line": 48,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getCommonDir",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "implode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 50,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "DS",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 50,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 50,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 50,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "static-property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 51,
                                                            "char": 26
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "rootDir",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 51,
                                                            "char": 26
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 51,
                                                        "char": 26
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 51,
                                                    "char": 26
                                                },
                                                {
                                                    "value": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 52,
                                                            "char": 30
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "COMMON_NAME",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 52,
                                                            "char": 30
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 52,
                                                        "char": 30
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 52,
                                                    "char": 30
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 54,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 54,
                                                    "char": 9
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 54,
                                            "char": 10
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 54,
                                        "char": 10
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 54,
                                "char": 11
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 55,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 49,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 49,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 48,
                    "last-line": 58,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getGlobalConfigDir",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "implode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 60,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "DS",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 60,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 60,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 60,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "static-property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 61,
                                                            "char": 26
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "rootDir",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 61,
                                                            "char": 26
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 61,
                                                        "char": 26
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 61,
                                                    "char": 26
                                                },
                                                {
                                                    "value": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 62,
                                                            "char": 30
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "COMMON_NAME",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 62,
                                                            "char": 30
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 62,
                                                        "char": 30
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 62,
                                                    "char": 30
                                                },
                                                {
                                                    "value": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "static-constant-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "self",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 63,
                                                                "char": 29
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "CONF_NAME",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 63,
                                                                "char": 29
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 63,
                                                            "char": 29
                                                        },
                                                        "right": {
                                                            "type": "static-constant-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "self",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 64,
                                                                "char": 9
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "EXT",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 64,
                                                                "char": 9
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 64,
                                                            "char": 9
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 64,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 64,
                                                    "char": 9
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 64,
                                            "char": 10
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 64,
                                        "char": 10
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 64,
                                "char": 11
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 65,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 59,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 59,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 58,
                    "last-line": 68,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getGlobalConfigPath",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "implode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 70,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "DS",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 70,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 70,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 70,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "static-property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 71,
                                                            "char": 26
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "rootDir",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 71,
                                                            "char": 26
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 71,
                                                        "char": 26
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 71,
                                                    "char": 26
                                                },
                                                {
                                                    "value": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 72,
                                                            "char": 30
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "COMMON_NAME",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 72,
                                                            "char": 30
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 72,
                                                        "char": 30
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 72,
                                                    "char": 30
                                                },
                                                {
                                                    "value": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 73,
                                                            "char": 28
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "CONF_NAME",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 73,
                                                            "char": 28
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 73,
                                                        "char": 28
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 73,
                                                    "char": 28
                                                },
                                                {
                                                    "value": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "static-constant-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "self",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 74,
                                                                "char": 29
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "CONF_NAME",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 74,
                                                                "char": 29
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 74,
                                                            "char": 29
                                                        },
                                                        "right": {
                                                            "type": "static-constant-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "self",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 75,
                                                                "char": 9
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "EXT",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 75,
                                                                "char": 9
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 75,
                                                            "char": 9
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 75,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 75,
                                                    "char": 9
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 75,
                                            "char": 10
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 75,
                                        "char": 10
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 75,
                                "char": 11
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 76,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 69,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 69,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 68,
                    "last-line": 79,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getGlobalLoadDir",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "implode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 81,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "DS",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 81,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 81,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 81,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "static-property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 82,
                                                            "char": 26
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "rootDir",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 82,
                                                            "char": 26
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 82,
                                                        "char": 26
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 82,
                                                    "char": 26
                                                },
                                                {
                                                    "value": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 83,
                                                            "char": 30
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "COMMON_NAME",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 83,
                                                            "char": 30
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 83,
                                                        "char": 30
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 83,
                                                    "char": 30
                                                },
                                                {
                                                    "value": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 84,
                                                            "char": 28
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "LOAD_NAME",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 84,
                                                            "char": 28
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 84,
                                                        "char": 28
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 84,
                                                    "char": 28
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 86,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 86,
                                                    "char": 9
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 86,
                                            "char": 10
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 86,
                                        "char": 10
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 86,
                                "char": 11
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 87,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 80,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 80,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 79,
                    "last-line": 90,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getModuleDirByName",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "moduleName",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 90,
                            "char": 64
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "implode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 92,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "DS",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 92,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 92,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 92,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "static-property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 93,
                                                            "char": 26
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "rootDir",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 93,
                                                            "char": 26
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 93,
                                                        "char": 26
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 93,
                                                    "char": 26
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "moduleName",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 94,
                                                        "char": 23
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 94,
                                                    "char": 23
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 96,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 96,
                                                    "char": 9
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 96,
                                            "char": 10
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 96,
                                        "char": 10
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 96,
                                "char": 11
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 97,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 91,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 91,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 90,
                    "last-line": 100,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getModuleNameByDir",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "moduleDir",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 100,
                            "char": 63
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "pathinfo",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "moduleDir",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 102,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 102,
                                        "char": 34
                                    },
                                    {
                                        "parameter": {
                                            "type": "constant",
                                            "value": "PATHINFO_FILENAME",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 102,
                                            "char": 53
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 102,
                                        "char": 53
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 102,
                                "char": 54
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 103,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 101,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 101,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 100,
                    "last-line": 105,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getModuleClassPath",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "moduleDir",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 105,
                            "char": 63
                        },
                        {
                            "type": "parameter",
                            "name": "runMode",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\PhalconPlus\\Enum\\RunMode",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 105,
                                "char": 99
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 105,
                            "char": 100
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "implode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 107,
                                            "char": 24
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 107,
                                        "char": 24
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "moduleDir",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 108,
                                                        "char": 22
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 108,
                                                    "char": 22
                                                },
                                                {
                                                    "value": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 109,
                                                            "char": 27
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "APP_NAME",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 109,
                                                            "char": 27
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 109,
                                                        "char": 27
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 109,
                                                    "char": 27
                                                },
                                                {
                                                    "value": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 110,
                                                            "char": 21
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "DS",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 110,
                                                            "char": 21
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 110,
                                                        "char": 21
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 110,
                                                    "char": 21
                                                },
                                                {
                                                    "value": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "runMode",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 111,
                                                            "char": 21
                                                        },
                                                        "name": "getMapClassName",
                                                        "call-type": 1,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 111,
                                                        "char": 39
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 111,
                                                    "char": 39
                                                },
                                                {
                                                    "value": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 113,
                                                            "char": 9
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "EXT",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 113,
                                                            "char": 9
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 113,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 113,
                                                    "char": 9
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 113,
                                            "char": 10
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 113,
                                        "char": 10
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 113,
                                "char": 11
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 114,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 105,
                    "last-line": 117,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getModuleConfigPath",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "moduleDir",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 117,
                            "char": 64
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "confPrefix",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 119,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 119,
                                    "char": 26
                                },
                                {
                                    "variable": "confPath",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 119,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 119,
                                    "char": 39
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 121,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "confPrefix",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "implode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "self",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 121,
                                                        "char": 42
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "DS",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 121,
                                                        "char": 42
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 121,
                                                    "char": 42
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 121,
                                                "char": 42
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "fcall",
                                                                "name": "rtrim",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "moduleDir",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                            "line": 122,
                                                                            "char": 28
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                        "line": 122,
                                                                        "char": 28
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "static-constant-access",
                                                                            "left": {
                                                                                "type": "variable",
                                                                                "value": "self",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                                "line": 122,
                                                                                "char": 38
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "DS",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                                "line": 122,
                                                                                "char": 38
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                            "line": 122,
                                                                            "char": 38
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                        "line": 122,
                                                                        "char": 38
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 122,
                                                                "char": 39
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 122,
                                                            "char": 39
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "static-constant-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "self",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 123,
                                                                    "char": 27
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "APP_NAME",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 123,
                                                                    "char": 27
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 123,
                                                                "char": 27
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 123,
                                                            "char": 27
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "static-constant-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "self",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 124,
                                                                    "char": 28
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "CONF_NAME",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 124,
                                                                    "char": 28
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 124,
                                                                "char": 28
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 124,
                                                            "char": 28
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 126,
                                                                "char": 9
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 126,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 126,
                                                    "char": 10
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 126,
                                                "char": 10
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 126,
                                        "char": 11
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 126,
                                    "char": 11
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 128,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "confPath",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "implode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 128,
                                                    "char": 32
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 128,
                                                "char": 32
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "confPrefix",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 129,
                                                                "char": 23
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 129,
                                                            "char": 23
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "constant",
                                                                "value": "APP_RUN_ENV",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 130,
                                                                "char": 24
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 130,
                                                            "char": 24
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "static-constant-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "self",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 132,
                                                                    "char": 9
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "EXT",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 132,
                                                                    "char": 9
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 132,
                                                                "char": 9
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 132,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 132,
                                                    "char": 10
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 132,
                                                "char": 10
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 132,
                                        "char": 11
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 132,
                                    "char": 11
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 134,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_file",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "confPath",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 134,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 134,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 134,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 134,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "confPath",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "implode",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 135,
                                                            "char": 36
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 135,
                                                        "char": 36
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array",
                                                            "left": [
                                                                {
                                                                    "value": {
                                                                        "type": "variable",
                                                                        "value": "confPrefix",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                        "line": 136,
                                                                        "char": 27
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 136,
                                                                    "char": 27
                                                                },
                                                                {
                                                                    "value": {
                                                                        "type": "static-constant-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "self",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                            "line": 137,
                                                                            "char": 32
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "CONF_NAME",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                            "line": 137,
                                                                            "char": 32
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                        "line": 137,
                                                                        "char": 32
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 137,
                                                                    "char": 32
                                                                },
                                                                {
                                                                    "value": {
                                                                        "type": "static-constant-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "self",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                            "line": 139,
                                                                            "char": 13
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "EXT",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                            "line": 139,
                                                                            "char": 13
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                        "line": 139,
                                                                        "char": 13
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 139,
                                                                    "char": 13
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 139,
                                                            "char": 14
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 139,
                                                        "char": 14
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 139,
                                                "char": 15
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 139,
                                            "char": 15
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 140,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 142,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_file",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "confPath",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 142,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 142,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 142,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 142,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Base\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "string",
                                                                    "value": "Module Config file not exists: ",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 143,
                                                                    "char": 83
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "confPath",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                    "line": 143,
                                                                    "char": 94
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 143,
                                                                "char": 94
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": " & ",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                                "line": 143,
                                                                "char": 100
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 143,
                                                            "char": 100
                                                        },
                                                        "right": {
                                                            "type": "constant",
                                                            "value": "APP_RUN_ENV",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 143,
                                                            "char": 114
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 143,
                                                        "char": 114
                                                    },
                                                    "right": {
                                                        "type": "static-constant-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 143,
                                                            "char": 125
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "EXT",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 143,
                                                            "char": 125
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 143,
                                                        "char": 125
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 143,
                                                    "char": 125
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 143,
                                                "char": 125
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 143,
                                        "char": 126
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                    "line": 144,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 146,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "confPath",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 146,
                                "char": 24
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 147,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 117,
                    "last-line": 150,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getComposerAutoloadPath",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "implode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 152,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "DS",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                "line": 152,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 152,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 152,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "static-property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 153,
                                                            "char": 26
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "rootDir",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                            "line": 153,
                                                            "char": 26
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 153,
                                                        "char": 26
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 153,
                                                    "char": 26
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "vendor",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 154,
                                                        "char": 19
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 154,
                                                    "char": 19
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "autoload.php",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                        "line": 156,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                                    "line": 156,
                                                    "char": 9
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                            "line": 156,
                                            "char": 10
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                        "line": 156,
                                        "char": 10
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                                "line": 156,
                                "char": 11
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                            "line": 157,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 150,
                    "last-line": 158,
                    "char": 26
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "COMMON_NAME",
                    "default": {
                        "type": "string",
                        "value": "common",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 8,
                        "char": 31
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 9,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "CONF_NAME",
                    "default": {
                        "type": "string",
                        "value": "config",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 9,
                        "char": 31
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 10,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "LOAD_NAME",
                    "default": {
                        "type": "string",
                        "value": "load",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 10,
                        "char": 29
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 11,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "PUB_NAME",
                    "default": {
                        "type": "string",
                        "value": "public",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 11,
                        "char": 31
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 12,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "APP_NAME",
                    "default": {
                        "type": "string",
                        "value": "app",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 12,
                        "char": 28
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 14,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "DS",
                    "default": {
                        "type": "constant",
                        "value": "DIRECTORY_SEPARATOR",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 14,
                        "char": 35
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 15,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "EXT",
                    "default": {
                        "type": "string",
                        "value": ".php",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 15,
                        "char": 21
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 16,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "ENV_NAME",
                    "default": {
                        "type": "string",
                        "value": "phalconplus.env",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                        "line": 16,
                        "char": 37
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
                    "line": 18,
                    "char": 11
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
            "line": 5,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Sys.zep",
        "line": 5,
        "char": 5
    }
]