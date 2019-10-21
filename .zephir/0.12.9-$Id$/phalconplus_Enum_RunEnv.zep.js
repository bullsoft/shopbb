[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Enum",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Enum\\AbstractEnum",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                "line": 2,
                "char": 34
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
        "line": 4,
        "char": 5
    },
    {
        "type": "class",
        "name": "RunEnv",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractEnum",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "isInProd",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "env",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                            "line": 16,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "fcall",
                                    "name": "substr",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "env",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                                "line": 19,
                                                "char": 26
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                            "line": 19,
                                            "char": 26
                                        },
                                        {
                                            "parameter": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                                "line": 19,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                            "line": 19,
                                            "char": 29
                                        },
                                        {
                                            "parameter": {
                                                "type": "int",
                                                "value": "7",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                                "line": 19,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                            "line": 19,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                    "line": 19,
                                    "char": 35
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "substr",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "static-constant-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "self",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                                    "line": 19,
                                                    "char": 60
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "PRODUCTION",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                                    "line": 19,
                                                    "char": 60
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                                "line": 19,
                                                "char": 60
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                            "line": 19,
                                            "char": 60
                                        },
                                        {
                                            "parameter": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                                "line": 19,
                                                "char": 63
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                            "line": 19,
                                            "char": 63
                                        },
                                        {
                                            "parameter": {
                                                "type": "int",
                                                "value": "7",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                                "line": 19,
                                                "char": 66
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                            "line": 19,
                                            "char": 66
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                    "line": 19,
                                    "char": 67
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                "line": 19,
                                "char": 67
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                            "line": 20,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                "line": 17,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                        "line": 17,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 16,
                    "last-line": 22,
                    "char": 26
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isInAbTest",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "static-constant-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "self",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                        "line": 24,
                                        "char": 31
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "AB_TEST",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                        "line": 24,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                    "line": 24,
                                    "char": 31
                                },
                                "right": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                        "line": 24,
                                        "char": 38
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "val",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                        "line": 24,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                    "line": 24,
                                    "char": 42
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                                "line": 24,
                                "char": 42
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                            "line": 25,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 22,
                    "last-line": 26,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "DEV",
                    "default": {
                        "type": "string",
                        "value": "dev",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                        "line": 6,
                        "char": 21
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 7,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "DEBUG",
                    "default": {
                        "type": "string",
                        "value": "debug",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                        "line": 7,
                        "char": 24
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 8,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "TEST",
                    "default": {
                        "type": "string",
                        "value": "test",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                        "line": 8,
                        "char": 22
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 9,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "UAT",
                    "default": {
                        "type": "string",
                        "value": "uat",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                        "line": 9,
                        "char": 20
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 10,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "PRE_PRODUCTION",
                    "default": {
                        "type": "string",
                        "value": "pre_production",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                        "line": 10,
                        "char": 42
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 11,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "AB_TEST",
                    "default": {
                        "type": "string",
                        "value": "ab_test",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                        "line": 11,
                        "char": 28
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 12,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "PRODUCTION",
                    "default": {
                        "type": "string",
                        "value": "production",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                        "line": 12,
                        "char": 34
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 14,
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
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                            "line": 14,
                            "char": 32
                        },
                        "right": {
                            "type": "variable",
                            "value": "DEV",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                            "line": 14,
                            "char": 32
                        },
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                        "line": 14,
                        "char": 32
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
                    "line": 16,
                    "char": 10
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
            "line": 4,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/RunEnv.zep",
        "line": 4,
        "char": 5
    }
]