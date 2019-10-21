[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Http",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 4,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Http\\Request",
                "alias": "BaseRequest",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                "line": 4,
                "char": 40
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 5,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Psr\\Http\\Message\\ServerRequestInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                "line": 5,
                "char": 44
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 6,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Psr\\Http\\Message\\UploadedFileInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                "line": 6,
                "char": 43
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 8,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\DiInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                "line": 8,
                "char": 24
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\FilterInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                "line": 9,
                "char": 28
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Http\\Request\\File",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                "line": 10,
                "char": 30
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 11,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Http\\Request\\Exception",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                "line": 11,
                "char": 35
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 12,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Events\\ManagerInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                "line": 12,
                "char": 36
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 13,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Di\\InjectionAwareInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                "line": 13,
                "char": 39
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 15,
        "char": 5
    },
    {
        "type": "class",
        "name": "PsrRequest",
        "abstract": 0,
        "final": 0,
        "extends": "BaseRequest",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "attributes",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 17,
                        "char": 31
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 19,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 20,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "cookies",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 20,
                        "char": 28
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 22,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 23,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "headers",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 23,
                        "char": 27
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 24,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "files",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 24,
                        "char": 26
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 26,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 27,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "psrRequest",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 27,
                        "char": 33
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 29,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 31,
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
                            "name": "request",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "ServerRequestInterface",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 31,
                                "char": 64
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 31,
                            "char": 65
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
                                    "property": "attributes",
                                    "expr": {
                                        "type": "short-ternary",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 33,
                                                "char": 40
                                            },
                                            "name": "getAttributes",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 33,
                                            "char": 57
                                        },
                                        "extra": {
                                            "type": "empty-array",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 33,
                                            "char": 62
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 33,
                                        "char": 62
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 33,
                                    "char": 62
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 34,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "cookies",
                                    "expr": {
                                        "type": "short-ternary",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 34,
                                                "char": 37
                                            },
                                            "name": "getCookieParams",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 34,
                                            "char": 56
                                        },
                                        "extra": {
                                            "type": "empty-array",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 34,
                                            "char": 61
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 34,
                                        "char": 61
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 34,
                                    "char": 61
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 35,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "headers",
                                    "expr": {
                                        "type": "short-ternary",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 35,
                                                "char": 37
                                            },
                                            "name": "getHeaders",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 35,
                                            "char": 51
                                        },
                                        "extra": {
                                            "type": "empty-array",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 35,
                                            "char": 56
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 35,
                                        "char": 56
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 35,
                                    "char": 56
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 36,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_rawBody",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 36,
                                                "char": 38
                                            },
                                            "name": "getBody",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 36,
                                            "char": 49
                                        },
                                        "name": "__toString",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 36,
                                        "char": 62
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 36,
                                    "char": 62
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 38,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "array-index",
                                    "operator": "assign",
                                    "variable": "_SERVER",
                                    "index-expr": [
                                        {
                                            "type": "string",
                                            "value": "REQUEST_URI",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 38,
                                            "char": 32
                                        }
                                    ],
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "self",
                                        "dynamic": 0,
                                        "name": "getRequestTarget",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 38,
                                                    "char": 66
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 38,
                                                "char": 66
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 38,
                                        "char": 67
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 38,
                                    "char": 67
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 39,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "array-index",
                                    "operator": "assign",
                                    "variable": "_SERVER",
                                    "index-expr": [
                                        {
                                            "type": "string",
                                            "value": "REQUEST_METHOD",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 39,
                                            "char": 35
                                        }
                                    ],
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 39,
                                            "char": 47
                                        },
                                        "name": "getMethod",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 39,
                                        "char": 59
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 39,
                                    "char": 59
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 41,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "posts",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 41,
                                    "char": 18
                                },
                                {
                                    "variable": "gets",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 41,
                                    "char": 24
                                },
                                {
                                    "variable": "cookies",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 41,
                                    "char": 33
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 42,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "posts",
                                    "expr": {
                                        "type": "short-ternary",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 42,
                                                "char": 29
                                            },
                                            "name": "getParsedBody",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 42,
                                            "char": 46
                                        },
                                        "extra": {
                                            "type": "empty-array",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 42,
                                            "char": 51
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 42,
                                        "char": 51
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 42,
                                    "char": 51
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 43,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "gets",
                                    "expr": {
                                        "type": "short-ternary",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 43,
                                                "char": 29
                                            },
                                            "name": "getQueryParams",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 43,
                                            "char": 47
                                        },
                                        "extra": {
                                            "type": "empty-array",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 43,
                                            "char": 52
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 43,
                                        "char": 52
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 43,
                                    "char": 52
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 44,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "cookies",
                                    "expr": {
                                        "type": "short-ternary",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 44,
                                                "char": 31
                                            },
                                            "name": "getCookieParams",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 44,
                                            "char": 50
                                        },
                                        "extra": {
                                            "type": "empty-array",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 44,
                                            "char": 55
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 44,
                                        "char": 55
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 44,
                                    "char": 55
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 46,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "k",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 46,
                                    "char": 14
                                },
                                {
                                    "variable": "v",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 46,
                                    "char": 17
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 48,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "posts",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 48,
                                "char": 28
                            },
                            "key": "k",
                            "value": "v",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "_POST",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "k",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 49,
                                                    "char": 24
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "v",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 49,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 49,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 50,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 52,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "gets",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 52,
                                "char": 26
                            },
                            "key": "k",
                            "value": "v",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "_GET",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "k",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 53,
                                                    "char": 23
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "v",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 53,
                                                "char": 28
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 53,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 54,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 55,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "array-index",
                                    "operator": "assign",
                                    "variable": "_GET",
                                    "index-expr": [
                                        {
                                            "type": "string",
                                            "value": "_url",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 55,
                                            "char": 22
                                        }
                                    ],
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 55,
                                                "char": 34
                                            },
                                            "name": "getUri",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 55,
                                            "char": 44
                                        },
                                        "name": "getPath",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 55,
                                        "char": 54
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 55,
                                    "char": 54
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 57,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "request",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 57,
                                    "char": 29
                                },
                                "name": "getServerParams",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 57,
                                "char": 48
                            },
                            "key": "k",
                            "value": "v",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "_SERVER",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "k",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 58,
                                                    "char": 26
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "v",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 58,
                                                "char": 31
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 58,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 59,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 60,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 60,
                                    "char": 26
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "headers",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 60,
                                    "char": 35
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 60,
                                "char": 35
                            },
                            "key": "k",
                            "value": "v",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "k",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "strtoupper",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "str_replace",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "-",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 61,
                                                                        "char": 45
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                    "line": 61,
                                                                    "char": 45
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "_",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 61,
                                                                        "char": 48
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                    "line": 61,
                                                                    "char": 48
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "k",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 61,
                                                                        "char": 51
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                    "line": 61,
                                                                    "char": 51
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 61,
                                                            "char": 52
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 61,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 61,
                                                "char": 53
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 61,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 62,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "_SERVER",
                                            "index-expr": [
                                                {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "HTTP_",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 62,
                                                        "char": 30
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "k",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 62,
                                                        "char": 32
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 62,
                                                    "char": 32
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "v",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 62,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 62,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 63,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 64,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "array-index",
                                    "operator": "assign",
                                    "variable": "_SERVER",
                                    "index-expr": [
                                        {
                                            "type": "string",
                                            "value": "REQUEST_URI",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 64,
                                            "char": 32
                                        }
                                    ],
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "self",
                                        "dynamic": 0,
                                        "name": "getRequestTarget",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 64,
                                                    "char": 66
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 64,
                                                "char": 66
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 64,
                                        "char": 67
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 64,
                                    "char": 67
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 66,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "cookies",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 66,
                                "char": 29
                            },
                            "key": "k",
                            "value": "v",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "_COOKIE",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "k",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 67,
                                                    "char": 26
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "v",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 67,
                                                "char": 31
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 67,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 68,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 70,
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
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 70,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "cookies",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 70,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 70,
                                        "char": 33
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 70,
                                    "char": 33
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 70,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "isset",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 71,
                                                    "char": 27
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "cookies",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 71,
                                                    "char": 35
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 71,
                                                "char": 35
                                            },
                                            "right": {
                                                "type": "fcall",
                                                "name": "session_name",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 71,
                                                "char": 50
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 71,
                                            "char": 52
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 71,
                                        "char": 52
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
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                    "line": 72,
                                                                    "char": 33
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "cookies",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                    "line": 72,
                                                                    "char": 41
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                "line": 72,
                                                                "char": 41
                                                            },
                                                            "right": {
                                                                "type": "fcall",
                                                                "name": "session_name",
                                                                "call-type": 1,
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                "line": 72,
                                                                "char": 56
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 72,
                                                            "char": 57
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 72,
                                                        "char": 57
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 72,
                                                "char": 58
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 73,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 74,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 75,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 75,
                                    "char": 14
                                },
                                "name": "mapFiles",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 75,
                                                "char": 32
                                            },
                                            "name": "getUploadedFiles",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 75,
                                            "char": 51
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 75,
                                        "char": 51
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 75,
                                "char": 52
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 76,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefix",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 76,
                                    "char": 19
                                },
                                {
                                    "variable": "input",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 76,
                                    "char": 26
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 77,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 77,
                                    "char": 35
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "files",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 77,
                                    "char": 42
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 77,
                                "char": 42
                            },
                            "key": "prefix",
                            "value": "input",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "_FILES",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "prefix",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 78,
                                                    "char": 30
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "input",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 78,
                                                "char": 39
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 78,
                                            "char": 39
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 79,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 81,
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
                                        "value": "request",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 81,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 81,
                                    "char": 39
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 82,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 31,
                    "last-line": 84,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected",
                        "static"
                    ],
                    "type": "method",
                    "name": "getRequestTarget",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "request",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "ServerRequestInterface",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 84,
                                "char": 79
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 84,
                            "char": 80
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "target",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 86,
                                                "char": 30
                                            },
                                            "name": "getUri",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 86,
                                            "char": 40
                                        },
                                        "name": "getPath",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 86,
                                        "char": 50
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 86,
                                    "char": 50
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 87,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "equals",
                                    "left": {
                                        "type": "variable",
                                        "value": "target",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 87,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 87,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 87,
                                    "char": 23
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 87,
                                "char": 25
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "target",
                                            "expr": {
                                                "type": "string",
                                                "value": "\/",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 88,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 88,
                                            "char": 27
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 89,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 90,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not-equals",
                                    "left": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 90,
                                                "char": 21
                                            },
                                            "name": "getUri",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 90,
                                            "char": 31
                                        },
                                        "name": "getQuery",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 90,
                                        "char": 44
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 90,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 90,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 90,
                                "char": 48
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "concat-assign",
                                            "variable": "target",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "?",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 91,
                                                    "char": 28
                                                },
                                                "right": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "request",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 91,
                                                            "char": 38
                                                        },
                                                        "name": "getUri",
                                                        "call-type": 1,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 91,
                                                        "char": 48
                                                    },
                                                    "name": "getQuery",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 91,
                                                    "char": 59
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 91,
                                                "char": 59
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 91,
                                            "char": 59
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 92,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 93,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "target",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 93,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 94,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 84,
                    "last-line": 96,
                    "char": 29
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "mapFiles",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "uploads",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 96,
                            "char": 44
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "file",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 98,
                                    "char": 17
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 99,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "uploads",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 99,
                                "char": 29
                            },
                            "value": "file",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "is_array",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "file",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 100,
                                                    "char": 29
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 100,
                                                "char": 29
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 100,
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
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 101,
                                                    "char": 22
                                                },
                                                "name": "mapFiles",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "file",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 101,
                                                            "char": 36
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 101,
                                                        "char": 36
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 101,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 102,
                                            "char": 13
                                        }
                                    ],
                                    "elseif_statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "instanceof",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "file",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 102,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "UploadedFileInterface",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 102,
                                                    "char": 60
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 102,
                                                "char": 60
                                            },
                                            "statements": [
                                                {
                                                    "type": "declare",
                                                    "data-type": "variable",
                                                    "variables": [
                                                        {
                                                            "variable": "tmpname",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 103,
                                                            "char": 28
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 104,
                                                    "char": 19
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "tmpname",
                                                            "expr": {
                                                                "type": "fcall",
                                                                "name": "tempnam",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "fcall",
                                                                            "name": "sys_get_temp_dir",
                                                                            "call-type": 1,
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 104,
                                                                            "char": 57
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 104,
                                                                        "char": 57
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": "upload",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 104,
                                                                            "char": 65
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 104,
                                                                        "char": 65
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                "line": 104,
                                                                "char": 66
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 104,
                                                            "char": 66
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 106,
                                                    "char": 18
                                                },
                                                {
                                                    "type": "if",
                                                    "expr": {
                                                        "type": "list",
                                                        "left": {
                                                            "type": "equals",
                                                            "left": {
                                                                "type": "constant",
                                                                "value": "UPLOAD_ERR_OK",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                "line": 106,
                                                                "char": 36
                                                            },
                                                            "right": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "file",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                    "line": 106,
                                                                    "char": 43
                                                                },
                                                                "name": "getError",
                                                                "call-type": 1,
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                "line": 106,
                                                                "char": 54
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 106,
                                                            "char": 54
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 106,
                                                        "char": 56
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "fcall",
                                                            "expr": {
                                                                "type": "fcall",
                                                                "name": "file_put_contents",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "tmpname",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 107,
                                                                            "char": 46
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 107,
                                                                        "char": 46
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "cast",
                                                                            "left": "string",
                                                                            "right": {
                                                                                "type": "mcall",
                                                                                "variable": {
                                                                                    "type": "variable",
                                                                                    "value": "file",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                                    "line": 107,
                                                                                    "char": 62
                                                                                },
                                                                                "name": "getStream",
                                                                                "call-type": 1,
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                                "line": 107,
                                                                                "char": 74
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 107,
                                                                            "char": 74
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 107,
                                                                        "char": 74
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                "line": 107,
                                                                "char": 75
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 108,
                                                            "char": 17
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 110,
                                                    "char": 19
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "object-property-append",
                                                            "operator": "assign",
                                                            "variable": "this",
                                                            "property": "files",
                                                            "expr": {
                                                                "type": "array",
                                                                "left": [
                                                                    {
                                                                        "key": {
                                                                            "type": "string",
                                                                            "value": "error",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 111,
                                                                            "char": 30
                                                                        },
                                                                        "value": {
                                                                            "type": "mcall",
                                                                            "variable": {
                                                                                "type": "variable",
                                                                                "value": "file",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                                "line": 111,
                                                                                "char": 37
                                                                            },
                                                                            "name": "getError",
                                                                            "call-type": 1,
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 111,
                                                                            "char": 48
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 111,
                                                                        "char": 48
                                                                    },
                                                                    {
                                                                        "key": {
                                                                            "type": "string",
                                                                            "value": "name",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 112,
                                                                            "char": 30
                                                                        },
                                                                        "value": {
                                                                            "type": "mcall",
                                                                            "variable": {
                                                                                "type": "variable",
                                                                                "value": "file",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                                "line": 112,
                                                                                "char": 37
                                                                            },
                                                                            "name": "getClientFilename",
                                                                            "call-type": 1,
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 112,
                                                                            "char": 57
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 112,
                                                                        "char": 57
                                                                    },
                                                                    {
                                                                        "key": {
                                                                            "type": "string",
                                                                            "value": "size",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 113,
                                                                            "char": 30
                                                                        },
                                                                        "value": {
                                                                            "type": "mcall",
                                                                            "variable": {
                                                                                "type": "variable",
                                                                                "value": "file",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                                "line": 113,
                                                                                "char": 37
                                                                            },
                                                                            "name": "getSize",
                                                                            "call-type": 1,
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 113,
                                                                            "char": 47
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 113,
                                                                        "char": 47
                                                                    },
                                                                    {
                                                                        "key": {
                                                                            "type": "string",
                                                                            "value": "tmp_name",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 114,
                                                                            "char": 30
                                                                        },
                                                                        "value": {
                                                                            "type": "variable",
                                                                            "value": "tmpname",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 114,
                                                                            "char": 39
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 114,
                                                                        "char": 39
                                                                    },
                                                                    {
                                                                        "key": {
                                                                            "type": "string",
                                                                            "value": "type",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 115,
                                                                            "char": 30
                                                                        },
                                                                        "value": {
                                                                            "type": "mcall",
                                                                            "variable": {
                                                                                "type": "variable",
                                                                                "value": "file",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                                "line": 115,
                                                                                "char": 37
                                                                            },
                                                                            "name": "getClientMediaType",
                                                                            "call-type": 1,
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                            "line": 116,
                                                                            "char": 17
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                        "line": 116,
                                                                        "char": 17
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                "line": 116,
                                                                "char": 18
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 116,
                                                            "char": 18
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 117,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 118,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 118,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 119,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 96,
                    "last-line": 121,
                    "char": 20
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "removeTmpFiles",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "item",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 123,
                                    "char": 17
                                },
                                {
                                    "variable": "tmp",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 123,
                                    "char": 22
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 124,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 124,
                                    "char": 26
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "files",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 124,
                                    "char": 33
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 124,
                                "char": 33
                            },
                            "value": "item",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fetch",
                                        "left": {
                                            "type": "variable",
                                            "value": "tmp",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 125,
                                            "char": 42
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "item",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 125,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "tmp_name",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 125,
                                                "char": 40
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 125,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 125,
                                        "char": 42
                                    },
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "file_exists",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "tmp",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 126,
                                                            "char": 35
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 126,
                                                        "char": 35
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 126,
                                                "char": 37
                                            },
                                            "statements": [
                                                {
                                                    "type": "fcall",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "unlink",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "tmp",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                    "line": 127,
                                                                    "char": 31
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                                "line": 127,
                                                                "char": 31
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 127,
                                                        "char": 32
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 128,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 129,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 130,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 131,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 121,
                    "last-line": 133,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getScheme",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 135,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "psrRequest",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 135,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 135,
                                        "char": 33
                                    },
                                    "name": "getUri",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 135,
                                    "char": 43
                                },
                                "name": "getScheme",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 135,
                                "char": 55
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 136,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 134,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 134,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 133,
                    "last-line": 140,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isAjax",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 143,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "headers",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 143,
                                                "char": 35
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 143,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "HTTP_X_REQUESTED_WITH",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 143,
                                            "char": 57
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 143,
                                        "char": 60
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 143,
                                    "char": 60
                                },
                                "right": {
                                    "type": "identical",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 143,
                                                "char": 67
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "headers",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 143,
                                                "char": 75
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 143,
                                            "char": 75
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "HTTP_X_REQUESTED_WITH",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 143,
                                            "char": 97
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 143,
                                        "char": 101
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "XMLHttpRequest",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 143,
                                        "char": 117
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 143,
                                    "char": 117
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 143,
                                "char": 117
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 144,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n    * Checks whether request has been made using ajax\n    *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 142,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 142,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 141,
                    "last-line": 148,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isSoap",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "contentType",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 151,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 152,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 152,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "headers",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 152,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 152,
                                        "char": 31
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "HTTP_SOAPACTION",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 152,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 152,
                                    "char": 49
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 152,
                                "char": 49
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 153,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 154,
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
                                            "variable": "contentType",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                    "line": 155,
                                                    "char": 36
                                                },
                                                "name": "getContentType",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 155,
                                                "char": 53
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 155,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 156,
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
                                                "value": "contentType",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 156,
                                                "char": 35
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 156,
                                            "char": 35
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 156,
                                        "char": 35
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "memstr",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "contentType",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 157,
                                                            "char": 42
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 157,
                                                        "char": 42
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "application\/soap+xml",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                            "line": 157,
                                                            "char": 64
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                        "line": 157,
                                                        "char": 64
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                                "line": 157,
                                                "char": 65
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 158,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 159,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 160,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 160,
                                "char": 21
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 161,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n    * Checks whether request has been made using SOAP\n    *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 150,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 150,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 149,
                    "last-line": 164,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getHttpHost",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 166,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "psrRequest",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 166,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 166,
                                        "char": 33
                                    },
                                    "name": "getUri",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 166,
                                    "char": 43
                                },
                                "name": "getHost",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 166,
                                "char": 53
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 167,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 165,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 165,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 164,
                    "last-line": 169,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getPort",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 171,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "psrRequest",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 171,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 171,
                                        "char": 33
                                    },
                                    "name": "getUri",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 171,
                                    "char": 43
                                },
                                "name": "getPort",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 171,
                                "char": 53
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 172,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 170,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 170,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 169,
                    "last-line": 174,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getHeaders",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 176,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "headers",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 176,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 176,
                                "char": 29
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 177,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 175,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 175,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 174,
                    "last-line": 179,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getContentType",
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 181,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "psrRequest",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 181,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                    "line": 181,
                                    "char": 30
                                },
                                "name": "getHeaderLine",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "Content-Type",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                            "line": 181,
                                            "char": 57
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                        "line": 181,
                                        "char": 57
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 181,
                                "char": 58
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                            "line": 182,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 179,
                                "char": 48
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                                "line": 180,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                        "line": 180,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
                    "line": 179,
                    "last-line": 184,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
            "line": 15,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Http\/PsrRequest.zep",
        "line": 15,
        "char": 5
    }
]