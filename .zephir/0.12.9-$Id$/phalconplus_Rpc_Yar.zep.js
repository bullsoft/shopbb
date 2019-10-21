[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Rpc",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\DiInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                "line": 3,
                "char": 24
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
        "line": 5,
        "char": 5
    },
    {
        "type": "class",
        "name": "Yar",
        "abstract": 0,
        "final": 0,
        "extends": "\\Phalcon\\Application",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "serviceObj",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                        "line": 7,
                        "char": 30
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 9,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                    "line": 10,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "requestArgs",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                        "line": 10,
                        "char": 30
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 12,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                    "line": 13,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "responseBody",
                    "default": {
                        "type": "string",
                        "value": "not supported http method",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                        "line": 13,
                        "char": 56
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 15,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                    "line": 17,
                    "char": 7
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
                            "name": "di",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "DiInterface",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                "line": 17,
                                "char": 45
                            },
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                "line": 17,
                                "char": 53
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 17,
                            "char": 53
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
                                            "value": "di",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 19,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                        "line": 19,
                                        "char": 31
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                "line": 19,
                                "char": 32
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 20,
                            "char": 5
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "rawBody",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                "line": 20,
                                                "char": 22
                                            },
                                            "name": "__get",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "request",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                        "line": 20,
                                                        "char": 36
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 20,
                                                    "char": 36
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 20,
                                            "char": 38
                                        },
                                        "name": "getRawBody",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                        "line": 20,
                                        "char": 51
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 20,
                                    "char": 51
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 21,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "requestArgs",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "msgpack_unpack",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "rawBody",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 21,
                                                    "char": 49
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                "line": 21,
                                                "char": 49
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                        "line": 21,
                                        "char": 50
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 21,
                                    "char": 50
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 22,
                            "char": 2
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                    "line": 17,
                    "last-line": 24,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "handle",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                        "line": 26,
                                        "char": 11
                                    },
                                    "name": "__get",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                "line": 26,
                                                "char": 25
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 26,
                                            "char": 25
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 26,
                                    "char": 27
                                },
                                "name": "isGet",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                "line": 26,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "responseBody",
                                            "expr": {
                                                "type": "string",
                                                "value": "<h1>Welcome to Phalcon+<\/h1>\n\t\t\t<p>If you see this page, the msgpack-rpc server is successfully installed and\n\t\t\tworking.<\/p>",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                "line": 27,
                                                "char": 154
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 27,
                                            "char": 154
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 28,
                                    "char": 3
                                }
                            ],
                            "elseif_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                "line": 28,
                                                "char": 17
                                            },
                                            "name": "__get",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "request",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                        "line": 28,
                                                        "char": 31
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 28,
                                                    "char": 31
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 28,
                                            "char": 33
                                        },
                                        "name": "isPost",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                        "line": 28,
                                        "char": 43
                                    },
                                    "statements": [
                                        {
                                            "type": "declare",
                                            "data-type": "variable",
                                            "variables": [
                                                {
                                                    "variable": "e",
                                                    "expr": {
                                                        "type": "null",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                        "line": 29,
                                                        "char": 25
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 29,
                                                    "char": 25
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 30,
                                            "char": 6
                                        },
                                        {
                                            "type": "declare",
                                            "data-type": "variable",
                                            "variables": [
                                                {
                                                    "variable": "ret",
                                                    "expr": {
                                                        "type": "array",
                                                        "left": [
                                                            {
                                                                "key": {
                                                                    "type": "string",
                                                                    "value": "errorCode",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 31,
                                                                    "char": 15
                                                                },
                                                                "value": {
                                                                    "type": "int",
                                                                    "value": "0",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 31,
                                                                    "char": 18
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 31,
                                                                "char": 18
                                                            },
                                                            {
                                                                "key": {
                                                                    "type": "string",
                                                                    "value": "errorMsg",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 32,
                                                                    "char": 14
                                                                },
                                                                "value": {
                                                                    "type": "string",
                                                                    "value": "",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 32,
                                                                    "char": 16
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 32,
                                                                "char": 16
                                                            },
                                                            {
                                                                "key": {
                                                                    "type": "string",
                                                                    "value": "logId",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 33,
                                                                    "char": 11
                                                                },
                                                                "value": {
                                                                    "type": "property-access",
                                                                    "left": {
                                                                        "type": "mcall",
                                                                        "variable": {
                                                                            "type": "variable",
                                                                            "value": "this",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                            "line": 33,
                                                                            "char": 18
                                                                        },
                                                                        "name": "__get",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "string",
                                                                                    "value": "logger",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                                    "line": 33,
                                                                                    "char": 31
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                                "line": 33,
                                                                                "char": 31
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 33,
                                                                        "char": 33
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "uid",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 33,
                                                                        "char": 37
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 33,
                                                                    "char": 37
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 33,
                                                                "char": 37
                                                            },
                                                            {
                                                                "key": {
                                                                    "type": "string",
                                                                    "value": "data",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 34,
                                                                    "char": 10
                                                                },
                                                                "value": {
                                                                    "type": "empty-array",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 35,
                                                                    "char": 4
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 35,
                                                                "char": 4
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                        "line": 35,
                                                        "char": 5
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 35,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 36,
                                            "char": 6
                                        },
                                        {
                                            "type": "try-catch",
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
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 37,
                                                                "char": 31
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "requestArgs",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 37,
                                                                "char": 44
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                            "line": 37,
                                                            "char": 44
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                        "line": 37,
                                                        "char": 44
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "throw",
                                                            "expr": {
                                                                "type": "new",
                                                                "class": "\\Exception",
                                                                "dynamic": 0,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": "invalid request args",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                            "line": 38,
                                                                            "char": 62
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 38,
                                                                        "char": 62
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 38,
                                                                "char": 63
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                            "line": 39,
                                                            "char": 17
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 40,
                                                    "char": 7
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "object-property",
                                                            "operator": "assign",
                                                            "variable": "this",
                                                            "property": "serviceObj",
                                                            "expr": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "mcall",
                                                                    "variable": {
                                                                        "type": "variable",
                                                                        "value": "this",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 40,
                                                                        "char": 33
                                                                    },
                                                                    "name": "getDi",
                                                                    "call-type": 1,
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 40,
                                                                    "char": 42
                                                                },
                                                                "name": "get",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": "backendSrv",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                            "line": 40,
                                                                            "char": 57
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 40,
                                                                        "char": 57
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 40,
                                                                "char": 58
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                            "line": 40,
                                                            "char": 58
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 41,
                                                    "char": 7
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "array-index",
                                                            "operator": "assign",
                                                            "variable": "ret",
                                                            "index-expr": [
                                                                {
                                                                    "type": "string",
                                                                    "value": "data",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 41,
                                                                    "char": 17
                                                                }
                                                            ],
                                                            "expr": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "property-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "this",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 41,
                                                                        "char": 26
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "serviceObj",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 41,
                                                                        "char": 38
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 41,
                                                                    "char": 38
                                                                },
                                                                "name": "callByObject",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "property-access",
                                                                            "left": {
                                                                                "type": "variable",
                                                                                "value": "this",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                                "line": 41,
                                                                                "char": 57
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "requestArgs",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                                "line": 41,
                                                                                "char": 69
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                            "line": 41,
                                                                            "char": 69
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 41,
                                                                        "char": 69
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 41,
                                                                "char": 70
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                            "line": 41,
                                                            "char": 70
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 42,
                                                    "char": 4
                                                }
                                            ],
                                            "catches": [
                                                {
                                                    "classes": [
                                                        {
                                                            "type": "variable",
                                                            "value": "\\Exception",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                            "line": 42,
                                                            "char": 22
                                                        }
                                                    ],
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "e",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                        "line": 46,
                                                        "char": 6
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "let",
                                                            "assignments": [
                                                                {
                                                                    "assign-type": "array-index",
                                                                    "operator": "assign",
                                                                    "variable": "ret",
                                                                    "index-expr": [
                                                                        {
                                                                            "type": "string",
                                                                            "value": "errorCode",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                            "line": 43,
                                                                            "char": 22
                                                                        }
                                                                    ],
                                                                    "expr": {
                                                                        "type": "fcall",
                                                                        "name": "max",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "mcall",
                                                                                    "variable": {
                                                                                        "type": "variable",
                                                                                        "value": "e",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                                        "line": 43,
                                                                                        "char": 32
                                                                                    },
                                                                                    "name": "getCode",
                                                                                    "call-type": 1,
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                                    "line": 43,
                                                                                    "char": 42
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                                "line": 43,
                                                                                "char": 42
                                                                            },
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "int",
                                                                                    "value": "1",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                                    "line": 43,
                                                                                    "char": 45
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                                "line": 43,
                                                                                "char": 45
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 43,
                                                                        "char": 46
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 43,
                                                                    "char": 46
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                            "line": 44,
                                                            "char": 7
                                                        },
                                                        {
                                                            "type": "let",
                                                            "assignments": [
                                                                {
                                                                    "assign-type": "array-index",
                                                                    "operator": "assign",
                                                                    "variable": "ret",
                                                                    "index-expr": [
                                                                        {
                                                                            "type": "string",
                                                                            "value": "errorMsg",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                            "line": 44,
                                                                            "char": 21
                                                                        }
                                                                    ],
                                                                    "expr": {
                                                                        "type": "mcall",
                                                                        "variable": {
                                                                            "type": "variable",
                                                                            "value": "e",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                            "line": 44,
                                                                            "char": 27
                                                                        },
                                                                        "name": "getMessage",
                                                                        "call-type": 1,
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                        "line": 44,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 44,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                            "line": 45,
                                                            "char": 4
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 46,
                                                    "char": 6
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 46,
                                            "char": 6
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "responseBody",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "msgpack_pack",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "ret",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                    "line": 46,
                                                                    "char": 45
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                                "line": 46,
                                                                "char": 45
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                        "line": 46,
                                                        "char": 46
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                    "line": 46,
                                                    "char": 46
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 47,
                                            "char": 3
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 48,
                                    "char": 11
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 48,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 48,
                                    "char": 21
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 49,
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                        "line": 49,
                                        "char": 52
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 49,
                                    "char": 52
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 50,
                            "char": 10
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 50,
                                    "char": 12
                                },
                                "name": "setStatusCode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "int",
                                            "value": "200",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 50,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                        "line": 50,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "OK",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 50,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                        "line": 50,
                                        "char": 34
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                "line": 50,
                                "char": 35
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 51,
                            "char": 10
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 51,
                                    "char": 12
                                },
                                "name": "setContent",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                "line": 51,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "responseBody",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                                "line": 51,
                                                "char": 42
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                            "line": 51,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                        "line": 51,
                                        "char": 42
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                "line": 51,
                                "char": 43
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 52,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "response",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                "line": 52,
                                "char": 18
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                            "line": 53,
                            "char": 2
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
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                    "line": 25,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                                "line": 25,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                        "line": 25,
                        "char": 2
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
                    "line": 24,
                    "last-line": 54,
                    "char": 16
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
            "line": 5,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Yar.zep",
        "line": 5,
        "char": 5
    }
]