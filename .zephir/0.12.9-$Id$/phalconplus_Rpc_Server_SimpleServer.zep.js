[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Rpc\\Server",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Rpc\\Server\\AbstractServer",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                "line": 2,
                "char": 42
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
        "line": 4,
        "char": 5
    },
    {
        "type": "class",
        "name": "SimpleServer",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractServer",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "final",
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "di",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\DI",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                "line": 6,
                                "char": 54
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                            "line": 6,
                            "char": 55
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
                                    "property": "di",
                                    "expr": {
                                        "type": "variable",
                                        "value": "di",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                        "line": 8,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                    "line": 8,
                                    "char": 26
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                            "line": 9,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "eventsManager",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "di",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                            "line": 9,
                                            "char": 38
                                        },
                                        "name": "getShared",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "eventsManager",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                                    "line": 9,
                                                    "char": 62
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                                "line": 9,
                                                "char": 62
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                        "line": 9,
                                        "char": 63
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                    "line": 9,
                                    "char": 63
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                            "line": 11,
                            "char": 16
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ob_start",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                "line": 11,
                                "char": 19
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                            "line": 12,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                    "line": 12,
                                    "char": 14
                                },
                                "name": "onConstruct",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                "line": 12,
                                "char": 28
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                            "line": 13,
                            "char": 20
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ob_end_clean",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                "line": 13,
                                "char": 23
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                            "line": 14,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                    "line": 6,
                    "last-line": 16,
                    "char": 25
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "onConstruct",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                    "line": 16,
                    "last-line": 21,
                    "char": 22
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__get",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "property",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                            "line": 21,
                            "char": 43
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                            "line": 23,
                                            "char": 17
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "di",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                            "line": 23,
                                            "char": 21
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                        "line": 23,
                                        "char": 21
                                    },
                                    "name": "has",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "property",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                                "line": 23,
                                                "char": 34
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                            "line": 23,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                    "line": 23,
                                    "char": 35
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                "line": 23,
                                "char": 37
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                                "line": 24,
                                                "char": 25
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "di",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                                "line": 24,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                            "line": 24,
                                            "char": 29
                                        },
                                        "name": "get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "property",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                                    "line": 24,
                                                    "char": 42
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                                "line": 24,
                                                "char": 42
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                        "line": 24,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                    "line": 25,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                            "line": 26,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                                "line": 26,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                            "line": 27,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
                    "line": 21,
                    "last-line": 28,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
            "line": 4,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/SimpleServer.zep",
        "line": 4,
        "char": 5
    }
]