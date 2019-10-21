[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Mvc",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Mvc\\Application",
                "alias": "BaseApplication",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                "line": 3,
                "char": 47
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
        "line": 4,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Psr\\Http\\Message\\ServerRequestInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                "line": 4,
                "char": 44
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
        "line": 5,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Psr\\Http\\Message\\ResponseInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                "line": 5,
                "char": 39
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
        "line": 6,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\DiInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                "line": 6,
                "char": 24
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
        "line": 7,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Psr\\Http\\Message\\UploadedFileInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                "line": 7,
                "char": 43
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
        "line": 8,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Http\\Cookie",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                "line": 8,
                "char": 24
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
        "line": 10,
        "char": 5
    },
    {
        "type": "class",
        "name": "PsrApplication",
        "abstract": 0,
        "final": 0,
        "extends": "BaseApplication",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "psrRequest",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                        "line": 12,
                        "char": 33
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "set",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 13,
                            "char": 12
                        },
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 14,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                    "line": 16,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "nativeRequest",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                        "line": 16,
                        "char": 36
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 18,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                    "line": 20,
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
                            "name": "dependencyInjector",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "DiInterface",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 20,
                                "char": 64
                            },
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 20,
                                "char": 72
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 20,
                            "char": 72
                        },
                        {
                            "type": "parameter",
                            "name": "psrRequest",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "ServerRequestInterface",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 20,
                                "char": 108
                            },
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 20,
                                "char": 116
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 20,
                            "char": 116
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
                                            "value": "dependencyInjector",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 22,
                                            "char": 47
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 22,
                                        "char": 47
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 22,
                                "char": 48
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 23,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_sendHeaders",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 23,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 23,
                                    "char": 39
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 24,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_sendCookies",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 24,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 24,
                                    "char": 39
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 25,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "psrRequest",
                                    "expr": {
                                        "type": "variable",
                                        "value": "psrRequest",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 25,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 25,
                                    "char": 42
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 27,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "nativeRequest",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Http\\PsrRequest",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "psrRequest",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 27,
                                                    "char": 78
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 27,
                                                "char": 78
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 27,
                                        "char": 79
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 27,
                                    "char": 79
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 28,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                    "line": 20,
                    "last-line": 30,
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
                            "type": "if",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 32,
                                    "char": 17
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "nativeRequest",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 32,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 32,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 33,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "nativeRequest",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 33,
                                                "char": 33
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 33,
                                            "char": 33
                                        },
                                        "name": "removeTmpFiles",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 33,
                                        "char": 50
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 34,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 35,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                    "line": 30,
                    "last-line": 37,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "handle",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "uri",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 37,
                                "char": 45
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 37,
                            "char": 45
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "psrRequest",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 39,
                                    "char": 23
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 41,
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 41,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_dependencyInjector",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 41,
                                        "char": 44
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 41,
                                    "char": 44
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 41,
                                "char": 44
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
                                                    "value": "there is no di(dependency injector) in PsrAppliction",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 42,
                                                    "char": 103
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 42,
                                                "char": 103
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 42,
                                        "char": 104
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 43,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 45,
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
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 45,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "psrRequest",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 45,
                                            "char": 36
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 45,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 45,
                                    "char": 36
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 45,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "psrRequest",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 46,
                                                    "char": 35
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "psrRequest",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 46,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 46,
                                                "char": 46
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 46,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 47,
                                    "char": 9
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
                                                    "value": "request in PsrApplication must instance of \\\\Psr\\\\Http\\\\Message\\\\ServerRequestInterface",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 48,
                                                    "char": 138
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 48,
                                                "char": 138
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 48,
                                        "char": 139
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 49,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 51,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "class_exists",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": "\\\\GuzzleHttp\\\\Psr7\\\\Response",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 51,
                                                "char": 54
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 51,
                                            "char": 54
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 51,
                                    "char": 56
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 51,
                                "char": 56
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
                                                    "value": "PsrApplication depends on GuzzleHttp\\\\Psr7\\\\Response",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 52,
                                                    "char": 103
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 52,
                                                "char": 103
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 52,
                                        "char": 104
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 53,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 55,
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 55,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_dependencyInjector",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 55,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 55,
                                    "char": 35
                                },
                                "name": "setShared",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "request",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 55,
                                            "char": 53
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 55,
                                        "char": 53
                                    },
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 55,
                                                "char": 60
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "nativeRequest",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 55,
                                                "char": 74
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 55,
                                            "char": 74
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 55,
                                        "char": 74
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 55,
                                "char": 75
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 58,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "reqUri",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "psrRequest",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 58,
                                                "char": 33
                                            },
                                            "name": "getUri",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 58,
                                            "char": 43
                                        },
                                        "name": "getPath",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 58,
                                        "char": 53
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 58,
                                    "char": 53
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 60,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 60,
                                    "char": 21
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 62,
                            "char": 16
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ob_start",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 62,
                                "char": 19
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 63,
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
                                        "type": "type-hint",
                                        "left": {
                                            "type": "variable",
                                            "value": "\\Phalcon\\Http\\Response",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 63,
                                            "char": 71
                                        },
                                        "right": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "parent",
                                            "dynamic": 0,
                                            "name": "handle",
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "reqUri",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 63,
                                                        "char": 70
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 63,
                                                    "char": 70
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 63,
                                            "char": 71
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 63,
                                        "char": 71
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 63,
                                    "char": 71
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 64,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "stdout",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "ob_get_clean",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 64,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 64,
                                    "char": 36
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 66,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "headers",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 66,
                                            "char": 28
                                        },
                                        "name": "mapHeaders",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 66,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 66,
                                                "char": 48
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 66,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 66,
                                    "char": 49
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 67,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "status",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 67,
                                            "char": 31
                                        },
                                        "name": "getStatusCode",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 67,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 67,
                                    "char": 47
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 68,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "reason",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 68,
                                            "char": 31
                                        },
                                        "name": "getReasonPhrase",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 68,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 68,
                                    "char": 49
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 70,
                            "char": 16
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ob_start",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 70,
                                "char": 19
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 71,
                            "char": 16
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 71,
                                    "char": 18
                                },
                                "name": "send",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 71,
                                "char": 25
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 72,
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 72,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 72,
                                    "char": 37
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 74,
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
                                        "value": "stdout",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 74,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 74,
                                    "char": 26
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 74,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "content",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "stdout",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 75,
                                                    "char": 34
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "content",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 75,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 75,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 75,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 76,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 78,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "psrResponse",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 78,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 79,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "psrResponse",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\GuzzleHttp\\Psr7\\Response",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "ternary",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "status",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 79,
                                                        "char": 63
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "status",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 79,
                                                        "char": 70
                                                    },
                                                    "extra": {
                                                        "type": "int",
                                                        "value": "200",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 79,
                                                        "char": 74
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 79,
                                                    "char": 74
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 79,
                                                "char": 74
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "headers",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 79,
                                                    "char": 83
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 79,
                                                "char": 83
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "content",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 79,
                                                    "char": 92
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 79,
                                                "char": 92
                                            },
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "psrRequest",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 79,
                                                        "char": 105
                                                    },
                                                    "name": "getProtocolVersion",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 79,
                                                    "char": 126
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 79,
                                                "char": 126
                                            },
                                            {
                                                "parameter": {
                                                    "type": "ternary",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "reason",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 79,
                                                        "char": 134
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "reason",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 79,
                                                        "char": 141
                                                    },
                                                    "extra": {
                                                        "type": "string",
                                                        "value": "OK",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 79,
                                                        "char": 144
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 79,
                                                    "char": 144
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 79,
                                                "char": 144
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 79,
                                        "char": 145
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 79,
                                    "char": 145
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 81,
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
                                                "type": "variable",
                                                "value": "headers",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 81,
                                                "char": 26
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "Content-Length",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 81,
                                                "char": 41
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 81,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 81,
                                        "char": 44
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 81,
                                    "char": 44
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 81,
                                "char": 44
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "psrResponse",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "psrResponse",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 82,
                                                    "char": 43
                                                },
                                                "name": "withAddedHeader",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "Content-Length",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 82,
                                                            "char": 74
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 82,
                                                        "char": 74
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "strlen",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "content",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                        "line": 82,
                                                                        "char": 90
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 82,
                                                                    "char": 90
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 82,
                                                            "char": 91
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 82,
                                                        "char": 91
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 82,
                                                "char": 92
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 82,
                                            "char": 92
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 83,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 85,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "psrResponse",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 85,
                                "char": 27
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 86,
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
                                    "value": "ResponseInterface",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 37,
                                    "char": 70
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 37,
                                "char": 70
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 38,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                        "line": 38,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                    "line": 37,
                    "last-line": 88,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "mapHeaders",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "response",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\Http\\Response",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 88,
                                "char": 67
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 88,
                            "char": 68
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "headers",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "response",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 90,
                                                "char": 32
                                            },
                                            "name": "getHeaders",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 90,
                                            "char": 46
                                        },
                                        "name": "toArray",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 90,
                                        "char": 56
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 90,
                                    "char": 56
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 92,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "rawHeaders",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "headers_list",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 92,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 92,
                                    "char": 40
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 93,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "h",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 93,
                                    "char": 14
                                },
                                {
                                    "variable": "pos",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 93,
                                    "char": 19
                                },
                                {
                                    "variable": "nativeHeaders",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 93,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 93,
                                    "char": 39
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 94,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "rawHeaders",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 94,
                                "char": 29
                            },
                            "value": "h",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "pos",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "strpos",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "h",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 95,
                                                            "char": 31
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 95,
                                                        "char": 31
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": ":",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 95,
                                                            "char": 34
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 95,
                                                        "char": 34
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 95,
                                                "char": 35
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 95,
                                            "char": 35
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 96,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-identical",
                                        "left": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 96,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "pos",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 96,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 96,
                                        "char": 30
                                    },
                                    "statements": [
                                        {
                                            "type": "declare",
                                            "data-type": "variable",
                                            "variables": [
                                                {
                                                    "variable": "name",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "substr",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "h",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 97,
                                                                    "char": 36
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                "line": 97,
                                                                "char": 36
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "int",
                                                                    "value": "0",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 97,
                                                                    "char": 39
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                "line": 97,
                                                                "char": 39
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "pos",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 97,
                                                                    "char": 44
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                "line": 97,
                                                                "char": 44
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 97,
                                                        "char": 45
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 97,
                                                    "char": 45
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 98,
                                            "char": 19
                                        },
                                        {
                                            "type": "declare",
                                            "data-type": "variable",
                                            "variables": [
                                                {
                                                    "variable": "value",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "trim",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "fcall",
                                                                    "name": "substr",
                                                                    "call-type": 1,
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "variable",
                                                                                "value": "h",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                                "line": 98,
                                                                                "char": 42
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                            "line": 98,
                                                                            "char": 42
                                                                        },
                                                                        {
                                                                            "parameter": {
                                                                                "type": "add",
                                                                                "left": {
                                                                                    "type": "variable",
                                                                                    "value": "pos",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                                    "line": 98,
                                                                                    "char": 48
                                                                                },
                                                                                "right": {
                                                                                    "type": "int",
                                                                                    "value": "1",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                                    "line": 98,
                                                                                    "char": 51
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                                "line": 98,
                                                                                "char": 51
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                            "line": 98,
                                                                            "char": 51
                                                                        }
                                                                    ],
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 98,
                                                                    "char": 52
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                "line": 98,
                                                                "char": 52
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 98,
                                                        "char": 53
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 98,
                                                    "char": 53
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 99,
                                            "char": 18
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "isset",
                                                "left": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "nativeHeaders",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 99,
                                                            "char": 39
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "name",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 99,
                                                            "char": 44
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 99,
                                                        "char": 45
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 99,
                                                    "char": 47
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 99,
                                                "char": 47
                                            },
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
                                                                        "type": "array-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "nativeHeaders",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                            "line": 100,
                                                                            "char": 47
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "name",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                            "line": 100,
                                                                            "char": 52
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                        "line": 100,
                                                                        "char": 53
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 100,
                                                                    "char": 53
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 100,
                                                            "char": 55
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 100,
                                                        "char": 55
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "let",
                                                            "assignments": [
                                                                {
                                                                    "assign-type": "array-index",
                                                                    "operator": "assign",
                                                                    "variable": "nativeHeaders",
                                                                    "index-expr": [
                                                                        {
                                                                            "type": "variable",
                                                                            "value": "name",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                            "line": 101,
                                                                            "char": 47
                                                                        }
                                                                    ],
                                                                    "expr": {
                                                                        "type": "array",
                                                                        "left": [
                                                                            {
                                                                                "value": {
                                                                                    "type": "array-access",
                                                                                    "left": {
                                                                                        "type": "variable",
                                                                                        "value": "nativeHeaders",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                                        "line": 101,
                                                                                        "char": 65
                                                                                    },
                                                                                    "right": {
                                                                                        "type": "variable",
                                                                                        "value": "name",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                                        "line": 101,
                                                                                        "char": 70
                                                                                    },
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                                    "line": 101,
                                                                                    "char": 71
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                                "line": 101,
                                                                                "char": 71
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                        "line": 101,
                                                                        "char": 72
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 101,
                                                                    "char": 72
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 102,
                                                            "char": 21
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 103,
                                                    "char": 23
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "array-index-append",
                                                            "operator": "assign",
                                                            "variable": "nativeHeaders",
                                                            "index-expr": [
                                                                {
                                                                    "type": "variable",
                                                                    "value": "name",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 103,
                                                                    "char": 43
                                                                }
                                                            ],
                                                            "expr": {
                                                                "type": "variable",
                                                                "value": "value",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                "line": 103,
                                                                "char": 54
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 103,
                                                            "char": 54
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 104,
                                                    "char": 17
                                                }
                                            ],
                                            "else_statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "array-index",
                                                            "operator": "assign",
                                                            "variable": "nativeHeaders",
                                                            "index-expr": [
                                                                {
                                                                    "type": "variable",
                                                                    "value": "name",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 105,
                                                                    "char": 43
                                                                }
                                                            ],
                                                            "expr": {
                                                                "type": "variable",
                                                                "value": "value",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                "line": 105,
                                                                "char": 52
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 105,
                                                            "char": 52
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 106,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 107,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 108,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 111,
                            "char": 21
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "header_remove",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 111,
                                "char": 24
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 112,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "headers",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_merge",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "nativeHeaders",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 112,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 112,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "headers",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 112,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 112,
                                                "char": 57
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 112,
                                        "char": 58
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 112,
                                    "char": 58
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 114,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "nativeHeaders",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 114,
                                            "char": 31
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "Set-Cookie",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 114,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                        "line": 114,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 114,
                                    "char": 45
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 114,
                                "char": 45
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "headers",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "Set-Cookie",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 115,
                                                    "char": 35
                                                }
                                            ],
                                            "expr": {
                                                "type": "ternary",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "is_array",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "nativeHeaders",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 115,
                                                                    "char": 61
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "Set-Cookie",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 115,
                                                                    "char": 72
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                "line": 115,
                                                                "char": 73
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 115,
                                                            "char": 73
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 115,
                                                    "char": 74
                                                },
                                                "right": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "nativeHeaders",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 115,
                                                        "char": 88
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "Set-Cookie",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                        "line": 115,
                                                        "char": 99
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 115,
                                                    "char": 100
                                                },
                                                "extra": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "nativeHeaders",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 115,
                                                                    "char": 115
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "Set-Cookie",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                    "line": 115,
                                                                    "char": 126
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                                "line": 115,
                                                                "char": 127
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                            "line": 115,
                                                            "char": 127
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 115,
                                                    "char": 128
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 115,
                                                "char": 128
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 115,
                                            "char": 128
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 116,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "headers",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "Set-Cookie",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                    "line": 117,
                                                    "char": 35
                                                }
                                            ],
                                            "expr": {
                                                "type": "empty-array",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                                "line": 117,
                                                "char": 41
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                            "line": 117,
                                            "char": 41
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                    "line": 118,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 119,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "headers",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                                "line": 119,
                                "char": 23
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                            "line": 120,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
                    "line": 88,
                    "last-line": 121,
                    "char": 22
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
            "line": 10,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Mvc\/PsrApplication.zep",
        "line": 10,
        "char": 5
    }
]