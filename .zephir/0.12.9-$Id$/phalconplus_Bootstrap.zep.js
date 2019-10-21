[
    {
        "type": "namespace",
        "name": "PhalconPlus",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Enum\\Sys",
                "alias": "Sys",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                "line": 3,
                "char": 32
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
        "line": 4,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Enum\\RunMode",
                "alias": "RunMode",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                "line": 4,
                "char": 40
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
        "line": 6,
        "char": 5
    },
    {
        "type": "class",
        "name": "Bootstrap",
        "abstract": 0,
        "final": 1,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "config",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 9,
                        "char": 28
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 11,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "di",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 11,
                        "char": 25
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "set",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 12,
                            "char": 12
                        },
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 13,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 15,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "application",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 15,
                        "char": 33
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 17,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "primaryModuleDef",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 17,
                        "char": 38
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 19,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "activeModules",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 19,
                        "char": 33
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 21,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "debug",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 21,
                        "char": 27
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 25,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "env",
                    "default": {
                        "type": "static-constant-access",
                        "left": {
                            "type": "variable",
                            "value": "\\PhalconPlus\\Enum\\RunEnv",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 25,
                            "char": 50
                        },
                        "right": {
                            "type": "variable",
                            "value": "DEV",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 25,
                            "char": 50
                        },
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 25,
                        "char": 50
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 27,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "autoHandle",
                    "default": {
                        "type": "bool",
                        "value": "true",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 27,
                        "char": 33
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "set",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 28,
                            "char": 12
                        },
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 29,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 31,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "loadedFiles",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 31,
                        "char": 32
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 33,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 35,
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
                            "name": "moduleDir",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 35,
                            "char": 50
                        },
                        {
                            "type": "parameter",
                            "name": "env",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 35,
                                "char": 65
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 35,
                            "char": 65
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "Sys",
                                "dynamic": 0,
                                "name": "init",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "moduleDir",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 38,
                                            "char": 28
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 38,
                                        "char": 28
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 38,
                                "char": 29
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 40,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "likely",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "env",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 40,
                                        "char": 29
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 40,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 40,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "sysEnv",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "trim",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "get_cfg_var",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "static-constant-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "Sys",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                            "line": 42,
                                                                            "char": 56
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "ENV_NAME",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                            "line": 42,
                                                                            "char": 56
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                        "line": 42,
                                                                        "char": 56
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                    "line": 42,
                                                                    "char": 56
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 42,
                                                            "char": 57
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 42,
                                                        "char": 57
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 42,
                                                "char": 58
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 42,
                                            "char": 58
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 45,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "empty",
                                            "left": {
                                                "type": "variable",
                                                "value": "sysEnv",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 45,
                                                "char": 30
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 45,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 45,
                                        "char": 30
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "env",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "sysEnv",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 45,
                                                        "char": 54
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 45,
                                                    "char": 54
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 45,
                                            "char": 56
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 46,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "env",
                                            "expr": {
                                                "type": "variable",
                                                "value": "env",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 47,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 47,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 48,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 52,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "not-equals",
                                    "left": {
                                        "type": "fcall",
                                        "name": "substr",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "constant",
                                                    "value": "PHP_SAPI",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 52,
                                                    "char": 27
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 52,
                                                "char": 27
                                            },
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "0",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 52,
                                                    "char": 30
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 52,
                                                "char": 30
                                            },
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "3",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 52,
                                                    "char": 33
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 52,
                                                "char": 33
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 52,
                                        "char": 36
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "cli",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 52,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 52,
                                    "char": 43
                                },
                                "right": {
                                    "type": "not",
                                    "left": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "\\PhalconPlus\\Enum\\RunEnv",
                                        "dynamic": 0,
                                        "name": "isInProd",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 52,
                                                        "char": 86
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "env",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 52,
                                                        "char": 90
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 52,
                                                    "char": 90
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 52,
                                                "char": 90
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 52,
                                        "char": 92
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 52,
                                    "char": 92
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 52,
                                "char": 92
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "debug",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Phalcon\\Debug",
                                                "dynamic": 0,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 53,
                                                "char": 51
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 53,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 54,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 54,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "debug",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 54,
                                                "char": 25
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 54,
                                            "char": 25
                                        },
                                        "name": "listen",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 54,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 55,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 58,
                            "char": 14
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "define",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APP_ENV",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 58,
                                            "char": 23
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 58,
                                        "char": 23
                                    },
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 58,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "env",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 58,
                                                "char": 34
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 58,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 58,
                                        "char": 34
                                    },
                                    {
                                        "parameter": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 58,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 58,
                                        "char": 41
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 58,
                                "char": 42
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 59,
                            "char": 14
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "define",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APP_RUN_ENV",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 59,
                                            "char": 27
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 59,
                                        "char": 27
                                    },
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 59,
                                                "char": 34
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "env",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 59,
                                                "char": 38
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 59,
                                            "char": 38
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 59,
                                        "char": 38
                                    },
                                    {
                                        "parameter": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 59,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 59,
                                        "char": 45
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 59,
                                "char": 46
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 60,
                            "char": 14
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "define",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APP_ROOT_DIR",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 60,
                                            "char": 28
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 60,
                                        "char": 28
                                    },
                                    {
                                        "parameter": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "Sys",
                                            "dynamic": 0,
                                            "name": "getRootDir",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 60,
                                            "char": 47
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 60,
                                        "char": 47
                                    },
                                    {
                                        "parameter": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 60,
                                            "char": 54
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 60,
                                        "char": 54
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 60,
                                "char": 55
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 61,
                            "char": 14
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "define",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APP_MODULE_DIR",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 61,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 61,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "Sys",
                                            "dynamic": 0,
                                            "name": "getPrimaryModuleDir",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 61,
                                            "char": 58
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 61,
                                        "char": 58
                                    },
                                    {
                                        "parameter": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 61,
                                            "char": 65
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 61,
                                        "char": 65
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 61,
                                "char": 66
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 62,
                            "char": 14
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "define",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APP_PRI_MODULE_DIR",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 62,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 62,
                                        "char": 34
                                    },
                                    {
                                        "parameter": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "Sys",
                                            "dynamic": 0,
                                            "name": "getPrimaryModuleDir",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 62,
                                            "char": 62
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 62,
                                        "char": 62
                                    },
                                    {
                                        "parameter": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 62,
                                            "char": 69
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 62,
                                        "char": 69
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 62,
                                "char": 70
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 63,
                            "char": 14
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "define",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APP_ROOT_COMMON_DIR",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 63,
                                            "char": 35
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 63,
                                        "char": 35
                                    },
                                    {
                                        "parameter": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "Sys",
                                            "dynamic": 0,
                                            "name": "getCommonDir",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 63,
                                            "char": 56
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 63,
                                        "char": 56
                                    },
                                    {
                                        "parameter": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 63,
                                            "char": 63
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 63,
                                        "char": 63
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 63,
                                "char": 64
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 64,
                            "char": 14
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "define",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APP_ROOT_COMMON_LOAD_DIR",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 64,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 64,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "Sys",
                                            "dynamic": 0,
                                            "name": "getGlobalLoadDir",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 64,
                                            "char": 65
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 64,
                                        "char": 65
                                    },
                                    {
                                        "parameter": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 64,
                                            "char": 72
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 64,
                                        "char": 72
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 64,
                                "char": 73
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 65,
                            "char": 14
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "define",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APP_ROOT_COMMON_CONF_DIR",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 65,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 65,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "Sys",
                                            "dynamic": 0,
                                            "name": "getGlobalConfigDir",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 65,
                                            "char": 67
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 65,
                                        "char": 67
                                    },
                                    {
                                        "parameter": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 65,
                                            "char": 74
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 65,
                                        "char": 74
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 65,
                                "char": 75
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 68,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "likely",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_file",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "scall",
                                                "dynamic-class": 0,
                                                "class": "Sys",
                                                "dynamic": 0,
                                                "name": "getComposerAutoloadPath",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 68,
                                                "char": 57
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 68,
                                            "char": 57
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 68,
                                    "char": 59
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 68,
                                "char": 59
                            },
                            "statements": [
                                {
                                    "type": "require",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "Sys",
                                        "dynamic": 0,
                                        "name": "getComposerAutoloadPath",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 69,
                                        "char": 51
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 70,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 71,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 35,
                    "last-line": 73,
                    "char": 19
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "registerModule",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "moduleDef",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\PhalconPlus\\Base\\ModuleDef",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 73,
                                "char": 75
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 73,
                            "char": 76
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 75,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "activeModules",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 75,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 75,
                                                "char": 46
                                            },
                                            "right": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "moduleDef",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 75,
                                                    "char": 57
                                                },
                                                "name": "getName",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 75,
                                                "char": 67
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 75,
                                            "char": 68
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 75,
                                        "char": 70
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 75,
                                    "char": 70
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 75,
                                "char": 70
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 76,
                                                "char": 25
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "activeModules",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 76,
                                                "char": 39
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 76,
                                            "char": 39
                                        },
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "moduleDef",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 76,
                                                "char": 50
                                            },
                                            "name": "getName",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 76,
                                            "char": 60
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 76,
                                        "char": 61
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 77,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 78,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_null",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 78,
                                                    "char": 34
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "di",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 78,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 78,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 78,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 78,
                                    "char": 39
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 78,
                                "char": 39
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
                                                        "value": "DI doesn't load yet, failed to register module ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 79,
                                                        "char": 99
                                                    },
                                                    "right": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "moduleDef",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 79,
                                                            "char": 111
                                                        },
                                                        "name": "getName",
                                                        "call-type": 1,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 79,
                                                        "char": 121
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 79,
                                                    "char": 121
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 79,
                                                "char": 121
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 79,
                                        "char": 122
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 80,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 81,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_null",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 81,
                                                    "char": 34
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 81,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 81,
                                                "char": 41
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 81,
                                            "char": 41
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 81,
                                    "char": 43
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 81,
                                "char": 43
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
                                                        "value": "Config doesn't initial yet, failed to register module ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 82,
                                                        "char": 106
                                                    },
                                                    "right": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "moduleDef",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 82,
                                                            "char": 118
                                                        },
                                                        "name": "getName",
                                                        "call-type": 1,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 82,
                                                        "char": 128
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 82,
                                                    "char": 128
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 82,
                                                "char": 128
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 82,
                                        "char": 129
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 83,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 85,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "moduleDef",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 85,
                                    "char": 22
                                },
                                "name": "getIsPrimary",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 85,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "fcall",
                                            "name": "defined",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "APP_RUN_MODE",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 87,
                                                        "char": 37
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 87,
                                                    "char": 37
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 87,
                                            "char": 39
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 87,
                                        "char": 39
                                    },
                                    "statements": [
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "define",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "APP_RUN_MODE",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 87,
                                                            "char": 60
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 87,
                                                        "char": 60
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "moduleDef",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                "line": 87,
                                                                "char": 72
                                                            },
                                                            "name": "getMode",
                                                            "call-type": 1,
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 87,
                                                            "char": 82
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 87,
                                                        "char": 82
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "false",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 87,
                                                            "char": 89
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 87,
                                                        "char": 89
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 87,
                                                "char": 90
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 87,
                                            "char": 92
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 89,
                                    "char": 15
                                },
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "moduleConf",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "moduleDef",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 89,
                                                    "char": 40
                                                },
                                                "name": "getConfig",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 89,
                                                "char": 52
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 89,
                                            "char": 52
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 91,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 91,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "config",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 91,
                                                "char": 26
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 91,
                                            "char": 26
                                        },
                                        "name": "merge",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "moduleConf",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 91,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 91,
                                                "char": 43
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 91,
                                        "char": 44
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 93,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 93,
                                            "char": 18
                                        },
                                        "name": "load",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "moduleDef",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 93,
                                                            "char": 34
                                                        },
                                                        "name": "getRunMode",
                                                        "call-type": 1,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 93,
                                                        "char": 48
                                                    },
                                                    "name": "getScriptPath",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 93,
                                                    "char": 64
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 93,
                                                "char": 64
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 93,
                                        "char": 65
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 94,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 96,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "module",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "moduleDef",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 96,
                                            "char": 32
                                        },
                                        "name": "impl",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 96,
                                                        "char": 43
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "di",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 96,
                                                        "char": 46
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 96,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 96,
                                                "char": 46
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 96,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 96,
                                    "char": 47
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 99,
                            "char": 14
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "module",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 99,
                                    "char": 16
                                },
                                "name": "registerAutoloaders",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 99,
                                "char": 38
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 100,
                            "char": 14
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "module",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 100,
                                    "char": 16
                                },
                                "name": "registerServices",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 100,
                                "char": 35
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 103,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "activeModules",
                                    "index-expr": [
                                        {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "moduleDef",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 103,
                                                "char": 43
                                            },
                                            "name": "getName",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 103,
                                            "char": 53
                                        }
                                    ],
                                    "expr": {
                                        "type": "variable",
                                        "value": "module",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 103,
                                        "char": 63
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 103,
                                    "char": 63
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 104,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "module",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 104,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 105,
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
                                    "value": "\\PhalconPlus\\Base\\AbstractModule",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 74,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 74,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 74,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 73,
                    "last-line": 107,
                    "char": 20
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "initConf",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "globalConfPath",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "Sys",
                                        "dynamic": 0,
                                        "name": "getGlobalConfigPath",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 110,
                                        "char": 56
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 110,
                                    "char": 56
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 111,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "fcall",
                                        "name": "is_file",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "globalConfPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 111,
                                                    "char": 44
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 111,
                                                "char": 44
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 111,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 111,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 111,
                                "char": 46
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "error_log",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "PHP Notice:  PhalconPlus\\\\Bootstrap Global config file not exists: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 114,
                                                        "char": 91
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "globalConfPath",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 114,
                                                        "char": 107
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 114,
                                                    "char": 107
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 114,
                                                "char": 107
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 114,
                                        "char": 108
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 115,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "config",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Phalcon\\Config",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "empty-array",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 115,
                                                            "char": 54
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 115,
                                                        "char": 54
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 115,
                                                "char": 55
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 115,
                                            "char": 55
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 116,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "config",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Phalcon\\Config",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                "line": 117,
                                                                "char": 57
                                                            },
                                                            "name": "load",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "globalConfPath",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                        "line": 117,
                                                                        "char": 77
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                    "line": 117,
                                                                    "char": 77
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 117,
                                                            "char": 78
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 117,
                                                        "char": 78
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 117,
                                                "char": 79
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 117,
                                            "char": 79
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 118,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 120,
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 120,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "primaryModuleDef",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 120,
                                        "char": 41
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 120,
                                    "char": 41
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 120,
                                "char": 41
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "primaryModuleDef",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\PhalconPlus\\Base\\ModuleDef",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 121,
                                                            "char": 78
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 121,
                                                        "char": 78
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "constant",
                                                            "value": "APP_MODULE_DIR",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 121,
                                                            "char": 94
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 121,
                                                        "char": 94
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "true",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 121,
                                                            "char": 100
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 121,
                                                        "char": 100
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 121,
                                                "char": 101
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 121,
                                            "char": 101
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 122,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 124,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 124,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 125,
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
                                    "value": "\\PhalconPlus\\Bootstrap",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 108,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 108,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 108,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 107,
                    "last-line": 127,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setApp",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "app",
                            "const": 0,
                            "data-type": "object",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 127,
                            "char": 38
                        },
                        {
                            "type": "parameter",
                            "name": "autoHandle",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 127,
                                "char": 66
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 127,
                            "char": 66
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "likely",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 129,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "application",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 129,
                                                "char": 42
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 129,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 129,
                                        "char": 44
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 129,
                                    "char": 44
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 129,
                                "char": 44
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "likely",
                                        "left": {
                                            "type": "or",
                                            "left": {
                                                "type": "list",
                                                "left": {
                                                    "type": "instanceof",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "app",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 130,
                                                        "char": 37
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "\\Phalcon\\Application",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 130,
                                                        "char": 59
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 130,
                                                    "char": 59
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 130,
                                                "char": 62
                                            },
                                            "right": {
                                                "type": "list",
                                                "left": {
                                                    "type": "instanceof",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "app",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 130,
                                                        "char": 78
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "\\Yar_Server",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 130,
                                                        "char": 91
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 130,
                                                    "char": 91
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 130,
                                                "char": 93
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 130,
                                            "char": 93
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 130,
                                        "char": 93
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "application",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "app",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 131,
                                                        "char": 44
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 131,
                                                    "char": 44
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 132,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "autoHandle",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "autoHandle",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 132,
                                                        "char": 50
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 132,
                                                    "char": 50
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 133,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\PhalconPlus\\Base\\Exception",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "Application must be instance of phalcon\\\\appliction or yar_server",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 134,
                                                            "char": 120
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 134,
                                                        "char": 120
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 134,
                                                "char": 121
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 135,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 136,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 137,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 137,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 138,
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
                                    "value": "\\PhalconPlus\\Bootstrap",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 128,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 128,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 128,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 127,
                    "last-line": 141,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getApp",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 143,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "application",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 143,
                                                "char": 44
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 143,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 143,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 143,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 143,
                                "char": 46
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
                                                    "type": "string",
                                                    "value": "Sorry, empty application in bootstrap",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 144,
                                                    "char": 88
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 144,
                                                "char": 88
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 144,
                                        "char": 89
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 145,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 146,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 146,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "application",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 146,
                                    "char": 33
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 146,
                                "char": 33
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 147,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "object",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 141,
                                "char": 40
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 142,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 142,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 141,
                    "last-line": 150,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "exec",
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 153,
                                    "char": 14
                                },
                                "name": "initConf",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 153,
                                "char": 25
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 155,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "handleMethod",
                                    "expr": {
                                        "type": "string",
                                        "value": "exec",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 155,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 155,
                                    "char": 32
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 156,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "concat-assign",
                                    "variable": "handleMethod",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 156,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "primaryModuleDef",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 156,
                                                "char": 51
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 156,
                                            "char": 51
                                        },
                                        "name": "getMapClassName",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 156,
                                        "char": 69
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 156,
                                    "char": 69
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 157,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "call_user_func_array",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 157,
                                                        "char": 42
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 157,
                                                    "char": 42
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "handleMethod",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 157,
                                                        "char": 56
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 157,
                                                    "char": 56
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 157,
                                            "char": 57
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 157,
                                        "char": 57
                                    },
                                    {
                                        "parameter": {
                                            "type": "fcall",
                                            "name": "func_get_args",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 157,
                                            "char": 74
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 157,
                                        "char": 74
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 157,
                                "char": 75
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 158,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 150,
                    "last-line": 160,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "terminate",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "fcall",
                                    "name": "session_status",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 162,
                                    "char": 30
                                },
                                "right": {
                                    "type": "constant",
                                    "value": "PHP_SESSION_ACTIVE",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 162,
                                    "char": 51
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 162,
                                "char": 51
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "session_write_close",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 162,
                                        "char": 74
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 162,
                                    "char": 76
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 163,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "headers_sent",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 163,
                                    "char": 28
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 163,
                                "char": 28
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "session_id",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 163,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 163,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 163,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 163,
                                    "char": 44
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 165,
                            "char": 21
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "session_unset",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 165,
                                "char": 24
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 167,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "_SESSION",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 167,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 167,
                                    "char": 26
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 168,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "_POST",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 168,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 168,
                                    "char": 23
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 169,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "_GET",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 169,
                                        "char": 22
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 169,
                                    "char": 22
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 170,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "_SERVER",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 170,
                                        "char": 25
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 170,
                                    "char": 25
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 171,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "_REQUEST",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 171,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 171,
                                    "char": 26
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 172,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "_COOKIE",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 172,
                                        "char": 25
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 172,
                                    "char": 25
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 173,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "_FILES",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 173,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 173,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 175,
                            "char": 19
                        },
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "\\Phalcon\\Di",
                                "dynamic": 0,
                                "name": "reset",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 175,
                                "char": 29
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 176,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "di",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 176,
                                        "char": 28
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 176,
                                    "char": 28
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 177,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "config",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 177,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 177,
                                    "char": 32
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 178,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "application",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 178,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 178,
                                    "char": 37
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 179,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "loadedFiles",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 179,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 179,
                                    "char": 35
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 180,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "primaryModuleDef",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 180,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 180,
                                    "char": 42
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 181,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "activeModules",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 181,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 181,
                                    "char": 37
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 182,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 160,
                    "last-line": 184,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__destruct",
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 186,
                                    "char": 14
                                },
                                "name": "terminate",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 186,
                                "char": 26
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 187,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 184,
                    "last-line": 191,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "execModule",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "request",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 192,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 192,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 195,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "config",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 195,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 195,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 195,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 195,
                                            "char": 38
                                        },
                                        "name": "initConf",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 195,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 195,
                                    "char": 51
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 197,
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 197,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "di",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 197,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 197,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 197,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "di",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Phalcon\\DI\\FactoryDefault",
                                                "dynamic": 0,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 198,
                                                "char": 60
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 198,
                                            "char": 60
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 200,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 200,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "di",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 200,
                                                "char": 22
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 200,
                                            "char": 22
                                        },
                                        "name": "setShared",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "bootstrap",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 200,
                                                    "char": 42
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 200,
                                                "char": 42
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 200,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 200,
                                                "char": 48
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 200,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 201,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 204,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 204,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "application",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 204,
                                                "char": 44
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 204,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 204,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 204,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 204,
                                "char": 46
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "application",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Phalcon\\Mvc\\Application",
                                                "dynamic": 0,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 205,
                                                "char": 67
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 205,
                                            "char": 67
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 206,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 207,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 207,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "application",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 207,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 207,
                                    "char": 27
                                },
                                "name": "setDI",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 207,
                                                "char": 39
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "di",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 207,
                                                "char": 42
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 207,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 207,
                                        "char": 42
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 207,
                                "char": 43
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 210,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 210,
                                    "char": 14
                                },
                                "name": "registerModule",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 210,
                                                "char": 35
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "primaryModuleDef",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 210,
                                                "char": 52
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 210,
                                            "char": 52
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 210,
                                        "char": 52
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 210,
                                "char": 53
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 212,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 212,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "autoHandle",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 212,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 212,
                                    "char": 30
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 212,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 212,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 212,
                                    "char": 45
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 215,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 215,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "application",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 215,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 215,
                                    "char": 34
                                },
                                "name": "handle",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 215,
                                            "char": 49
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 215,
                                        "char": 49
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 215,
                                "char": 50
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 216,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @request a uri string (for \\Phalcon\\Mvc\\Application) or Psr\\Http\\Message\\Request\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "\\PhalconPlus\\Bootstrap",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 192,
                                    "char": 80
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 192,
                                "char": 80
                            },
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "\\Phalcon\\Http\\Response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 193,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 193,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 193,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 192,
                    "last-line": 218,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "execSrv",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 221,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "config",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 221,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 221,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 221,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 221,
                                            "char": 38
                                        },
                                        "name": "initConf",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 221,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 221,
                                    "char": 51
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 223,
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 223,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "di",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 223,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 223,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 223,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "di",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Phalcon\\DI\\FactoryDefault",
                                                "dynamic": 0,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 224,
                                                "char": 60
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 224,
                                            "char": 60
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 225,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 225,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "di",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 225,
                                                "char": 22
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 225,
                                            "char": 22
                                        },
                                        "name": "setShared",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "bootstrap",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 225,
                                                    "char": 42
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 225,
                                                "char": 42
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 225,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 225,
                                                "char": 48
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 225,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 226,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 229,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 229,
                                    "char": 14
                                },
                                "name": "registerModule",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 229,
                                                "char": 35
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "primaryModuleDef",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 229,
                                                "char": 52
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 229,
                                            "char": 52
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 229,
                                        "char": 52
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 229,
                                "char": 53
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 231,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "backendSrv",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 231,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 231,
                                    "char": 30
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 233,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 233,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "di",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 233,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 233,
                                        "char": 30
                                    },
                                    "name": "has",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": "backendSrv",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 233,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 233,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 233,
                                    "char": 47
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 233,
                                "char": 47
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "backendSrv",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 234,
                                                        "char": 35
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "di",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 234,
                                                        "char": 39
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 234,
                                                    "char": 39
                                                },
                                                "name": "get",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "backendSrv",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 234,
                                                            "char": 54
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 234,
                                                        "char": 54
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 234,
                                                "char": 55
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 234,
                                            "char": 55
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 235,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "list",
                                            "left": {
                                                "type": "instanceof",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "backendSrv",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 235,
                                                    "char": 39
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "\\PhalconPlus\\Rpc\\Server\\AbstractServer",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 235,
                                                    "char": 79
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 235,
                                                "char": 79
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 235,
                                            "char": 81
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 235,
                                        "char": 81
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
                                                            "type": "string",
                                                            "value": "Service object(DI[\\\"backendSrv\\\"]) must be type of \\\\PhalconPlus\\\\Rpc\\\\Server\\\\AbstractServer",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 236,
                                                            "char": 148
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 236,
                                                        "char": 148
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 236,
                                                "char": 149
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 237,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 238,
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
                                            "variable": "backendSrv",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\PhalconPlus\\Rpc\\Server\\SimpleServer",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                "line": 239,
                                                                "char": 76
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "di",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                "line": 239,
                                                                "char": 79
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 239,
                                                            "char": 79
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 239,
                                                        "char": 79
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 239,
                                                "char": 80
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 239,
                                            "char": 80
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 240,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 240,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "di",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 240,
                                                "char": 22
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 240,
                                            "char": 22
                                        },
                                        "name": "setShared",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "backendSrv",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 240,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 240,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "backendSrv",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 240,
                                                    "char": 55
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 240,
                                                "char": 55
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 240,
                                        "char": 56
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 241,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 244,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 244,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "application",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 244,
                                                "char": 44
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 244,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 244,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 244,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 244,
                                "char": 46
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "application",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Yar_Server",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "backendSrv",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 245,
                                                            "char": 63
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 245,
                                                        "char": 63
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 245,
                                                "char": 64
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 245,
                                            "char": 64
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 246,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 249,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 249,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "autoHandle",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 249,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 249,
                                    "char": 30
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 249,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 249,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 249,
                                    "char": 45
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 252,
                            "char": 16
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ob_start",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 252,
                                "char": 19
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 253,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 253,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "application",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 253,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 253,
                                    "char": 27
                                },
                                "name": "handle",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 253,
                                "char": 36
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 254,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "content",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "ob_get_clean",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 254,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 254,
                                    "char": 37
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 256,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 256,
                                    "char": 21
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 257,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "response",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\Phalcon\\Http\\Response",
                                        "dynamic": 0,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 257,
                                        "char": 52
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 257,
                                    "char": 52
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 258,
                            "char": 16
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 258,
                                    "char": 18
                                },
                                "name": "setStatusCode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "int",
                                            "value": "200",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 258,
                                            "char": 36
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 258,
                                        "char": 36
                                    },
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "OK",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 258,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 258,
                                        "char": 40
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 258,
                                "char": 41
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 259,
                            "char": 16
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 259,
                                    "char": 18
                                },
                                "name": "setContent",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "content",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 259,
                                            "char": 37
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 259,
                                        "char": 37
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 259,
                                "char": 38
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 260,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "response",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 260,
                                "char": 24
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 261,
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
                                    "value": "\\Phalcon\\Http\\Response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 218,
                                    "char": 59
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 218,
                                "char": 59
                            },
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "\\PhalconPlus\\Bootstrap",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 219,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 219,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 219,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 218,
                    "last-line": 263,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "execTask",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "argv",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 263,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "di",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\DI\\FactoryDefault",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 263,
                                "char": 72
                            },
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 263,
                                "char": 80
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 263,
                            "char": 80
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 266,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "config",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 266,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 266,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 266,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 266,
                                            "char": 38
                                        },
                                        "name": "initConf",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 266,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 266,
                                    "char": 51
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 267,
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 267,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "di",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 267,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 267,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 267,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "likely",
                                        "left": {
                                            "type": "or",
                                            "left": {
                                                "type": "fcall",
                                                "name": "is_null",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "di",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 268,
                                                            "char": 33
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 268,
                                                        "char": 33
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 268,
                                                "char": 36
                                            },
                                            "right": {
                                                "type": "not",
                                                "left": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "instanceof",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "di",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 268,
                                                            "char": 53
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "\\Phalcon\\DI\\FactoryDefault\\CLI",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 268,
                                                            "char": 85
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 268,
                                                        "char": 85
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 268,
                                                    "char": 87
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 268,
                                                "char": 87
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 268,
                                            "char": 87
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 268,
                                        "char": 87
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "di",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "\\Phalcon\\DI\\FactoryDefault\\CLI",
                                                        "dynamic": 0,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 269,
                                                        "char": 68
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 269,
                                                    "char": 68
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 270,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "di",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "di",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 271,
                                                        "char": 34
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 271,
                                                    "char": 34
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 272,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 273,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 273,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "di",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 273,
                                                "char": 22
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 273,
                                            "char": 22
                                        },
                                        "name": "setShared",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "bootstrap",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 273,
                                                    "char": 42
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 273,
                                                "char": 42
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 273,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 273,
                                                "char": 48
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 273,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 274,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 277,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 277,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "application",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 277,
                                                "char": 44
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 277,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 277,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 277,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 277,
                                "char": 46
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "application",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Phalcon\\CLI\\Console",
                                                "dynamic": 0,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 278,
                                                "char": 63
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 278,
                                            "char": 63
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 279,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 280,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 280,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "application",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 280,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 280,
                                    "char": 27
                                },
                                "name": "setDI",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 280,
                                                "char": 39
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "di",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 280,
                                                "char": 42
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 280,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 280,
                                        "char": 42
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 280,
                                "char": 43
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 283,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 283,
                                    "char": 14
                                },
                                "name": "registerModule",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 283,
                                                "char": 35
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "primaryModuleDef",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 283,
                                                "char": 52
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 283,
                                            "char": 52
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 283,
                                        "char": 52
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 283,
                                "char": 53
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 286,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 286,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "autoHandle",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 286,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 286,
                                    "char": 30
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 286,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 286,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 286,
                                    "char": 45
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 289,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 289,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "application",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 289,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 289,
                                    "char": 34
                                },
                                "name": "handle",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "argv",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 289,
                                            "char": 46
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 289,
                                        "char": 46
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 289,
                                "char": 47
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 290,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 263,
                    "last-line": 292,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getPrimaryModuleDef",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 294,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "primaryModuleDef",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 294,
                                    "char": 38
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 294,
                                "char": 38
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 295,
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
                                    "value": "\\PhalconPlus\\Base\\ModuleDef",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 293,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 293,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 293,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 292,
                    "last-line": 297,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getPrimaryModule",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "name",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 299,
                                                "char": 25
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "primaryModuleDef",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 299,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 299,
                                            "char": 43
                                        },
                                        "name": "getName",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 299,
                                        "char": 53
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 299,
                                    "char": 53
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 300,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 300,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "activeModules",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 300,
                                                    "char": 38
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 300,
                                                "char": 38
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "name",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 300,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 300,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 300,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 300,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 300,
                                "char": 46
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
                                                        "value": "Module not exists: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 301,
                                                        "char": 71
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 301,
                                                        "char": 77
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 301,
                                                    "char": 77
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 301,
                                                "char": 77
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 301,
                                        "char": 78
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 302,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 303,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "array-access",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 303,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "activeModules",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 303,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 303,
                                    "char": 35
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "name",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 303,
                                    "char": 40
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 303,
                                "char": 41
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 304,
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
                                    "value": "\\PhalconPlus\\Base\\AbstractModule",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 298,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 298,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 298,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 297,
                    "last-line": 306,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getModule",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 306,
                            "char": 43
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 308,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "activeModules",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 308,
                                                    "char": 38
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 308,
                                                "char": 38
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "name",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 308,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 308,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 308,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 308,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 308,
                                "char": 46
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
                                                        "value": "Module not exists: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 309,
                                                        "char": 71
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 309,
                                                        "char": 77
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 309,
                                                    "char": 77
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 309,
                                                "char": 77
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 309,
                                        "char": 78
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 310,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 311,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "array-access",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 311,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "activeModules",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 311,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 311,
                                    "char": 35
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "name",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 311,
                                    "char": 40
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 311,
                                "char": 41
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 312,
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
                                    "value": "\\PhalconPlus\\Base\\AbstractModule",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 307,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 307,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 307,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 306,
                    "last-line": 314,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getModuleDef",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 314,
                            "char": 46
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 316,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "activeModules",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 316,
                                                    "char": 38
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 316,
                                                "char": 38
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "name",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 316,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 316,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 316,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 316,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 316,
                                "char": 46
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
                                                        "value": "Module not exists: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 317,
                                                        "char": 71
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 317,
                                                        "char": 77
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 317,
                                                    "char": 77
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 317,
                                                "char": 77
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 317,
                                        "char": 78
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 318,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 319,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 319,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "activeModules",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 319,
                                            "char": 35
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 319,
                                        "char": 35
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 319,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 319,
                                    "char": 42
                                },
                                "name": "getDef",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 319,
                                "char": 51
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 320,
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
                                    "value": "\\PhalconPlus\\Base\\ModuleDef",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 315,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 315,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 315,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 314,
                    "last-line": 322,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "dependModule",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "moduleName",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 322,
                            "char": 52
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "module",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 324,
                                    "char": 19
                                },
                                {
                                    "variable": "moduleDef",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 324,
                                    "char": 30
                                },
                                {
                                    "variable": "moduleDir",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 324,
                                    "char": 41
                                },
                                {
                                    "variable": "moduleConf",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 324,
                                    "char": 53
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 325,
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
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "Sys",
                                        "dynamic": 0,
                                        "name": "getModuleDirByName",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "moduleName",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 325,
                                                    "char": 59
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 325,
                                                "char": 59
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 325,
                                        "char": 60
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 325,
                                    "char": 60
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 326,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "moduleDef",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Base\\ModuleDef",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 326,
                                                    "char": 61
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 326,
                                                "char": 61
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "moduleDir",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 326,
                                                    "char": 72
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 326,
                                                "char": 72
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 326,
                                        "char": 73
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 326,
                                    "char": 73
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 328,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "module",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 328,
                                            "char": 27
                                        },
                                        "name": "registerModule",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "moduleDef",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 328,
                                                    "char": 52
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 328,
                                                "char": 52
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 328,
                                        "char": 53
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 328,
                                    "char": 53
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 335,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "moduleConf",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\Phalcon\\Config",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 335,
                                                        "char": 51
                                                    },
                                                    "name": "load",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "moduleDef",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                    "line": 335,
                                                                    "char": 67
                                                                },
                                                                "name": "getConfigPath",
                                                                "call-type": 1,
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                                "line": 335,
                                                                "char": 83
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                            "line": 335,
                                                            "char": 83
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 335,
                                                    "char": 84
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 335,
                                                "char": 84
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 335,
                                        "char": 85
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 335,
                                    "char": 85
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 337,
                            "char": 18
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "moduleConf",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 337,
                                    "char": 20
                                },
                                "name": "merge",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 337,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "config",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 337,
                                                "char": 39
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 337,
                                            "char": 39
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 337,
                                        "char": 39
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 337,
                                "char": 40
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 338,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 338,
                                    "char": 14
                                },
                                "name": "setConfig",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "moduleConf",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 338,
                                            "char": 35
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 338,
                                        "char": 35
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 338,
                                "char": 36
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 339,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "module",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 339,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 340,
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
                                    "value": "\\PhalconPlus\\Base\\AbstractModule",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 323,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 323,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 323,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 322,
                    "last-line": 342,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isDebug",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "null",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 344,
                                    "char": 22
                                },
                                "right": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 344,
                                        "char": 29
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "debug",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 344,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 344,
                                    "char": 35
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 344,
                                "char": 35
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 345,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 343,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 343,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 342,
                    "last-line": 347,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getDebug",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 349,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "debug",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 349,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 349,
                                "char": 27
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 350,
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
                                    "value": "\\Phalcon\\Debug",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 348,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 348,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 348,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 347,
                    "last-line": 352,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getEnv",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 354,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "env",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 354,
                                    "char": 25
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 354,
                                "char": 25
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 355,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 353,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 353,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 352,
                    "last-line": 357,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getConfig",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 359,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "config",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 359,
                                    "char": 28
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 359,
                                "char": 28
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 360,
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
                                    "value": "\\Phalcon\\Config",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 358,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 358,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                        "line": 358,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 357,
                    "last-line": 363,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setConfig",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "config",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\Config",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 363,
                                "char": 54
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 363,
                            "char": 55
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "globalConf",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 365,
                                    "char": 23
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 366,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 366,
                                            "char": 19
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "di",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 366,
                                            "char": 23
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 366,
                                        "char": 23
                                    },
                                    "name": "has",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": "config",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 366,
                                                "char": 34
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 366,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 366,
                                    "char": 36
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 366,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "globalConf",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Phalcon\\Config",
                                                "dynamic": 0,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 367,
                                                "char": 51
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 367,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 368,
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
                                            "variable": "globalConf",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 369,
                                                        "char": 35
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "di",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 369,
                                                        "char": 39
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 369,
                                                    "char": 39
                                                },
                                                "name": "getConfig",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 369,
                                                "char": 51
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 369,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 370,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 371,
                            "char": 18
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "globalConf",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 371,
                                    "char": 20
                                },
                                "name": "merge",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "config",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 371,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 371,
                                        "char": 33
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 371,
                                "char": 34
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 372,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "config",
                                    "expr": {
                                        "type": "variable",
                                        "value": "globalConf",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 372,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 372,
                                    "char": 38
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 373,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 373,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "di",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 373,
                                        "char": 18
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 373,
                                    "char": 18
                                },
                                "name": "set",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "config",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 373,
                                            "char": 29
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 373,
                                        "char": 29
                                    },
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 373,
                                                "char": 36
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "config",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 373,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 373,
                                            "char": 43
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 373,
                                        "char": 43
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 373,
                                "char": 44
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 374,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 374,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 375,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 363,
                    "last-line": 377,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "load",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "filePath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 377,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "fcall",
                                        "name": "is_string",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "filePath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 379,
                                                    "char": 40
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 379,
                                                "char": 40
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 379,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 379,
                                    "char": 42
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 379,
                                "char": 42
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 380,
                                        "char": 25
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 381,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 383,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "fcall",
                                        "name": "is_file",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "filePath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 383,
                                                    "char": 38
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 383,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 383,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 383,
                                    "char": 40
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 383,
                                "char": 40
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
                                                        "value": "The file you try to load is not exists. file position: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 384,
                                                        "char": 107
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "filePath",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                        "line": 384,
                                                        "char": 117
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                    "line": 384,
                                                    "char": 117
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                                "line": 384,
                                                "char": 117
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 384,
                                        "char": 118
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 385,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 387,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "loader",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 387,
                                    "char": 19
                                },
                                {
                                    "variable": "config",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 387,
                                    "char": 27
                                },
                                {
                                    "variable": "application",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 387,
                                    "char": 40
                                },
                                {
                                    "variable": "di",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 387,
                                    "char": 44
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 388,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "bootstrap",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 388,
                                    "char": 22
                                },
                                {
                                    "variable": "rootPath",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 388,
                                    "char": 32
                                },
                                {
                                    "variable": "fileRet",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 388,
                                    "char": 41
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 390,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "fileRet",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 390,
                                    "char": 55
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 390,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "loadedFiles",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 390,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 390,
                                        "char": 44
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "filePath",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 390,
                                        "char": 53
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 390,
                                    "char": 55
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 390,
                                "char": 55
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "fileRet",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 391,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 392,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 394,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "rootPath",
                                    "expr": {
                                        "type": "string",
                                        "value": "rootPath",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 395,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 395,
                                    "char": 30
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "loader",
                                    "expr": {
                                        "type": "string",
                                        "value": "loader",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 396,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 396,
                                    "char": 26
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "config",
                                    "expr": {
                                        "type": "string",
                                        "value": "config",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 397,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 397,
                                    "char": 26
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "application",
                                    "expr": {
                                        "type": "string",
                                        "value": "application",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 398,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 398,
                                    "char": 36
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "bootstrap",
                                    "expr": {
                                        "type": "string",
                                        "value": "bootstrap",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 399,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 399,
                                    "char": 32
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "di",
                                    "expr": {
                                        "type": "string",
                                        "value": "di",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 400,
                                        "char": 18
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 400,
                                    "char": 18
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 402,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "dynamic-variable",
                                    "operator": "assign",
                                    "variable": "rootPath",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "Sys",
                                        "dynamic": 0,
                                        "name": "getRootDir",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 402,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 402,
                                    "char": 43
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 403,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "dynamic-variable",
                                    "operator": "assign",
                                    "variable": "loader",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\Phalcon\\Loader",
                                        "dynamic": 0,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 403,
                                        "char": 45
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 403,
                                    "char": 45
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 404,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "dynamic-variable",
                                    "operator": "assign",
                                    "variable": "config",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 404,
                                            "char": 29
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "config",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 404,
                                            "char": 36
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 404,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 404,
                                    "char": 36
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 405,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "dynamic-variable",
                                    "operator": "assign",
                                    "variable": "application",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 405,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "application",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 405,
                                            "char": 46
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 405,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 405,
                                    "char": 46
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 406,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "dynamic-variable",
                                    "operator": "assign",
                                    "variable": "bootstrap",
                                    "expr": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 406,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 406,
                                    "char": 31
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 407,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "dynamic-variable",
                                    "operator": "assign",
                                    "variable": "di",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 407,
                                            "char": 25
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "di",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 407,
                                            "char": 28
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 407,
                                        "char": 28
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 407,
                                    "char": 28
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 419,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "fileRet",
                                    "expr": {
                                        "type": "require",
                                        "left": {
                                            "type": "variable",
                                            "value": "filePath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 419,
                                            "char": 39
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 419,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 419,
                                    "char": 39
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 420,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "loadedFiles",
                                    "index-expr": [
                                        {
                                            "type": "variable",
                                            "value": "filePath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                            "line": 420,
                                            "char": 39
                                        }
                                    ],
                                    "expr": {
                                        "type": "variable",
                                        "value": "fileRet",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                        "line": 420,
                                        "char": 50
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                    "line": 420,
                                    "char": 50
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 421,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "fileRet",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                                "line": 421,
                                "char": 23
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                            "line": 422,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
                    "line": 377,
                    "last-line": 423,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
            "line": 6,
            "char": 11
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Bootstrap.zep",
        "line": 6,
        "char": 11
    }
]