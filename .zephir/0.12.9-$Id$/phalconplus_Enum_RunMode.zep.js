[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Enum",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Enum\\AbstractEnum",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                "line": 3,
                "char": 34
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
        "line": 4,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Enum\\Sys",
                "alias": "Sys",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                "line": 4,
                "char": 32
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
        "line": 6,
        "char": 5
    },
    {
        "type": "class",
        "name": "RunMode",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractEnum",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "mapClasses",
                    "default": {
                        "type": "array",
                        "left": [
                            {
                                "key": {
                                    "type": "string",
                                    "value": "Web",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 18,
                                    "char": 17
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Module",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 18,
                                    "char": 25
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 18,
                                "char": 25
                            },
                            {
                                "key": {
                                    "type": "string",
                                    "value": "Cli",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 19,
                                    "char": 17
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Task",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 19,
                                    "char": 23
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 19,
                                "char": 23
                            },
                            {
                                "key": {
                                    "type": "string",
                                    "value": "Srv",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 20,
                                    "char": 17
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Srv",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 20,
                                    "char": 22
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 20,
                                "char": 22
                            },
                            {
                                "key": {
                                    "type": "string",
                                    "value": "Micro",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 21,
                                    "char": 17
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Micro",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 22,
                                    "char": 5
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 22,
                                "char": 5
                            }
                        ],
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                        "line": 22,
                        "char": 6
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                    "line": 25,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "scripts",
                    "default": {
                        "type": "array",
                        "left": [
                            {
                                "key": {
                                    "type": "string",
                                    "value": "Web",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 26,
                                    "char": 15
                                },
                                "value": {
                                    "type": "string",
                                    "value": "default-web.php",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 26,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 26,
                                "char": 32
                            },
                            {
                                "key": {
                                    "type": "string",
                                    "value": "Cli",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 27,
                                    "char": 15
                                },
                                "value": {
                                    "type": "string",
                                    "value": "default-cli.php",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 27,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 27,
                                "char": 32
                            },
                            {
                                "key": {
                                    "type": "string",
                                    "value": "Srv",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 28,
                                    "char": 15
                                },
                                "value": {
                                    "type": "string",
                                    "value": "default-web.php",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 28,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 28,
                                "char": 32
                            },
                            {
                                "key": {
                                    "type": "string",
                                    "value": "Micro",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 29,
                                    "char": 15
                                },
                                "value": {
                                    "type": "string",
                                    "value": "default-micro.php",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 30,
                                    "char": 5
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 30,
                                "char": 5
                            }
                        ],
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                        "line": 30,
                        "char": 6
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                    "line": 32,
                    "char": 10
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getScriptPath",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "script",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 34,
                                    "char": 19
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                            "line": 35,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "script",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "Sys",
                                            "dynamic": 0,
                                            "name": "getGlobalLoadDir",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                            "line": 35,
                                            "char": 46
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                    "line": 35,
                                                    "char": 53
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "scripts",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                    "line": 35,
                                                    "char": 61
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                "line": 35,
                                                "char": 61
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                    "line": 35,
                                                    "char": 67
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "val",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                    "line": 35,
                                                    "char": 71
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                "line": 35,
                                                "char": 71
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                            "line": 35,
                                            "char": 72
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                        "line": 35,
                                        "char": 72
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 35,
                                    "char": 72
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                            "line": 36,
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
                                                "value": "script",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                "line": 36,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                            "line": 36,
                                            "char": 27
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 36,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 36,
                                "char": 29
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
                                                        "value": "PHP Notice:  PhalconPlus\\\\Enum\\\\RunMode Global load file not exists: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                        "line": 37,
                                                        "char": 93
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "script",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                        "line": 37,
                                                        "char": 101
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                    "line": 37,
                                                    "char": 101
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                                "line": 37,
                                                "char": 101
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                        "line": 37,
                                        "char": 102
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 38,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                        "line": 38,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 39,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                            "line": 40,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "script",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 40,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                            "line": 41,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 32,
                                "char": 47
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 33,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                        "line": 33,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                    "line": 32,
                    "last-line": 43,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getMapClassName",
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                        "line": 45,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "mapClasses",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                        "line": 45,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 45,
                                    "char": 32
                                },
                                "right": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                        "line": 45,
                                        "char": 38
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "val",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                        "line": 45,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                    "line": 45,
                                    "char": 42
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 45,
                                "char": 43
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                            "line": 46,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                                "line": 44,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                        "line": 44,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                    "line": 43,
                    "last-line": 47,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "WEB",
                    "default": {
                        "type": "string",
                        "value": "Web",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                        "line": 8,
                        "char": 20
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                    "line": 9,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "CLI",
                    "default": {
                        "type": "string",
                        "value": "Cli",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                        "line": 9,
                        "char": 20
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                    "line": 10,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "SRV",
                    "default": {
                        "type": "string",
                        "value": "Srv",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                        "line": 10,
                        "char": 20
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                    "line": 11,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "MICRO",
                    "default": {
                        "type": "string",
                        "value": "Micro",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                        "line": 11,
                        "char": 24
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                    "line": 13,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "__default",
                    "default": {
                        "type": "static-constant-access",
                        "left": {
                            "type": "variable",
                            "value": "self",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                            "line": 13,
                            "char": 32
                        },
                        "right": {
                            "type": "variable",
                            "value": "CLI",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                            "line": 13,
                            "char": 32
                        },
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                        "line": 13,
                        "char": 32
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
                    "line": 17,
                    "char": 13
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
            "line": 6,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunMode.zep",
        "line": 6,
        "char": 5
    }
]