[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Logger\\Adapter",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Assert\\Assertion",
                "alias": "Assert",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                "line": 2,
                "char": 43
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Logger\\AdapterInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                "line": 3,
                "char": 36
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
        "line": 5,
        "char": 5
    },
    {
        "type": "class",
        "name": "FilePlus",
        "abstract": 0,
        "final": 0,
        "extends": "\\Phalcon\\Logger\\Adapter\\File",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "type2Handler",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                        "line": 7,
                        "char": 30
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 8,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "type2Ext",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                        "line": 8,
                        "char": 26
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 10,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "mode",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 12,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "_path",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 13,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "_options",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 14,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "_fileHandler",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 16,
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
                            "name": "filePath",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 16,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "options",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 16,
                                "char": 69
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 16,
                            "char": 69
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "Assert",
                                "dynamic": 0,
                                "name": "notEmpty",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "filePath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 18,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 18,
                                        "char": 34
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 18,
                                "char": 35
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 20,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "mode",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 20,
                                    "char": 17
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 21,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "mode",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 21,
                                    "char": 38
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 21,
                                        "char": 31
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "mode",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 21,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 21,
                                    "char": 38
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 21,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "fcall",
                                            "name": "strpos",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "mode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 22,
                                                        "char": 27
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 22,
                                                    "char": 27
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "r",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 22,
                                                        "char": 30
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 22,
                                                    "char": 30
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 22,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 22,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 22,
                                        "char": 42
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "mode",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "mode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 23,
                                                        "char": 38
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 23,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 24,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\InvalidArgumentException",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "Logger must be opened in append or write mode",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                            "line": 25,
                                                            "char": 98
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 25,
                                                        "char": 98
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 25,
                                                "char": 99
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 26,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 27,
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
                                            "property": "mode",
                                            "expr": {
                                                "type": "string",
                                                "value": "ab",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 28,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 28,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 29,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 31,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_fileHandler",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 31,
                                            "char": 39
                                        },
                                        "name": "open",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "filePath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 31,
                                                    "char": 53
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 31,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 31,
                                        "char": 54
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 31,
                                    "char": 54
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 32,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_path",
                                    "expr": {
                                        "type": "variable",
                                        "value": "filePath",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 32,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 32,
                                    "char": 35
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 33,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_options",
                                    "expr": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 33,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 33,
                                    "char": 37
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 36,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "type2Handler",
                                    "index-expr": [
                                        {
                                            "type": "int",
                                            "value": "-1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 36,
                                            "char": 34
                                        }
                                    ],
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 36,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_fileHandler",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 36,
                                            "char": 56
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 36,
                                        "char": 56
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 36,
                                    "char": 56
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 37,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "type2Ext",
                                    "index-expr": [
                                        {
                                            "type": "int",
                                            "value": "-1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 37,
                                            "char": 30
                                        }
                                    ],
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 37,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 37,
                                    "char": 34
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 38,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 16,
                    "last-line": 40,
                    "char": 19
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "open",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "filePath",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 40,
                            "char": 43
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "handler",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 42,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 42,
                                    "char": 27
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 43,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "handler",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "fopen",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "filePath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 43,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 43,
                                                "char": 37
                                            },
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 43,
                                                        "char": 44
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "mode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 43,
                                                        "char": 49
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 43,
                                                    "char": 49
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 43,
                                                "char": 49
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 43,
                                        "char": 50
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 43,
                                    "char": 50
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 44,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "handler",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 44,
                                    "char": 21
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 44,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 44,
                                "char": 29
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
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "Cannot open log file ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 45,
                                                        "char": 56
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "filePath",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 45,
                                                        "char": 66
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 45,
                                                    "char": 66
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 45,
                                                "char": 66
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 45,
                                        "char": 67
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 46,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 47,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "handler",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 47,
                                "char": 23
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 48,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 40,
                    "last-line": 51,
                    "char": 20
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "log",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 51,
                            "char": 33
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 51,
                                "char": 53
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 51,
                            "char": 53
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 51,
                                "char": 76
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 51,
                            "char": 76
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "handler",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 53,
                                    "char": 14
                                },
                                {
                                    "variable": "toggledType",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 53,
                                    "char": 27
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 55,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "equals",
                                    "left": {
                                        "type": "typeof",
                                        "left": {
                                            "type": "variable",
                                            "value": "type",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 55,
                                            "char": 19
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 55,
                                        "char": 19
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "string",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 55,
                                        "char": 29
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 55,
                                    "char": 29
                                },
                                "right": {
                                    "type": "equals",
                                    "left": {
                                        "type": "typeof",
                                        "left": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 55,
                                            "char": 47
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 55,
                                        "char": 47
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "integer",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 55,
                                        "char": 57
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 55,
                                    "char": 57
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 55,
                                "char": 57
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "toggledType",
                                            "expr": {
                                                "type": "variable",
                                                "value": "message",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 56,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 56,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 57,
                                    "char": 3
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "equals",
                                            "left": {
                                                "type": "typeof",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "type",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 58,
                                                    "char": 20
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 58,
                                                "char": 20
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "string",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 58,
                                                "char": 30
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 58,
                                            "char": 30
                                        },
                                        "right": {
                                            "type": "equals",
                                            "left": {
                                                "type": "typeof",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 58,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 58,
                                                "char": 48
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "null",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 58,
                                                "char": 55
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 58,
                                            "char": 55
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 58,
                                        "char": 55
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "toggledType",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "message",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 59,
                                                        "char": 30
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 59,
                                                    "char": 30
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 60,
                                            "char": 4
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "toggledType",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "type",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 61,
                                                        "char": 27
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 61,
                                                    "char": 27
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 62,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 63,
                                    "char": 3
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 65,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "toggledType",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 65,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 65,
                                    "char": 26
                                },
                                "right": {
                                    "type": "string",
                                    "value": "null",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 65,
                                    "char": 33
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 65,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "toggledType",
                                            "expr": {
                                                "type": "static-constant-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "\\Phalcon\\Logger",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 66,
                                                    "char": 44
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "DEBUG",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 66,
                                                    "char": 44
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 66,
                                                "char": 44
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 66,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 67,
                                    "char": 3
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 69,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "handler",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 69,
                                    "char": 59
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 69,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "type2Handler",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 69,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 69,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "toggledType",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 69,
                                        "char": 57
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 69,
                                    "char": 59
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 69,
                                "char": 59
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_fileHandler",
                                            "expr": {
                                                "type": "variable",
                                                "value": "handler",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 70,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 70,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 71,
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
                                            "property": "_fileHandler",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 72,
                                                        "char": 43
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "type2Handler",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 72,
                                                        "char": 56
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 72,
                                                    "char": 56
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "-1",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 72,
                                                    "char": 59
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 72,
                                                "char": 60
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 72,
                                            "char": 60
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 73,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 75,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "parent",
                                "dynamic": 0,
                                "name": "log",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "type",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 75,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 75,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 75,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 75,
                                        "char": 41
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 75,
                                            "char": 50
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 75,
                                        "char": 50
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 75,
                                "char": 51
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 76,
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
                                    "value": "AdapterInterface",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 52,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 52,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                        "line": 52,
                        "char": 2
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 51,
                    "last-line": 92,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "registerExtension",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "ext",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 92,
                            "char": 50
                        },
                        {
                            "type": "parameter",
                            "name": "types",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 92,
                            "char": 63
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "Assert",
                                "dynamic": 0,
                                "name": "notEmpty",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "ext",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 94,
                                            "char": 29
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 94,
                                        "char": 29
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 94,
                                "char": 30
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 95,
                            "char": 14
                        },
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "Assert",
                                "dynamic": 0,
                                "name": "notEmpty",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "types",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 95,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 95,
                                        "char": 31
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 95,
                                "char": 32
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 97,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "filePath",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 97,
                                    "char": 21
                                },
                                {
                                    "variable": "type",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 97,
                                    "char": 27
                                },
                                {
                                    "variable": "fileHandler",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 97,
                                    "char": 40
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 98,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "filePath",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 98,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_path",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 98,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 98,
                                            "char": 37
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "ext",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 98,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 98,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 98,
                                    "char": 42
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 99,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "fileHandler",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 99,
                                            "char": 32
                                        },
                                        "name": "open",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "filePath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 99,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 99,
                                                "char": 46
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 99,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 99,
                                    "char": 47
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 100,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "types",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 100,
                                "char": 27
                            },
                            "value": "type",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property-array-index",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "type2Handler",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "type",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 101,
                                                    "char": 40
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "fileHandler",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 101,
                                                "char": 55
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 101,
                                            "char": 55
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 102,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property-array-index",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "type2Ext",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "type",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 102,
                                                    "char": 36
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "ext",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 102,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 102,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 103,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 104,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 92,
                    "last-line": 106,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "close",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "type",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 108,
                                    "char": 17
                                },
                                {
                                    "variable": "handler",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 108,
                                    "char": 27
                                },
                                {
                                    "variable": "result",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 108,
                                    "char": 34
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 109,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "result",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 109,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 109,
                                    "char": 26
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 110,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 110,
                                    "char": 35
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "type2Handler",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 110,
                                    "char": 49
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 110,
                                "char": 49
                            },
                            "key": "type",
                            "value": "handler",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "equals",
                                        "left": {
                                            "type": "fcall",
                                            "name": "fclose",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "handler",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 111,
                                                        "char": 30
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 111,
                                                    "char": 30
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 111,
                                            "char": 33
                                        },
                                        "right": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 111,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 111,
                                        "char": 41
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "result",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "false",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 112,
                                                        "char": 35
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 112,
                                                    "char": 35
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 113,
                                            "char": 21
                                        },
                                        {
                                            "type": "break",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 114,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 115,
                                    "char": 17
                                },
                                {
                                    "type": "unset",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 115,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "type2Handler",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 115,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 115,
                                                "char": 37
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "type",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 115,
                                                "char": 42
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 115,
                                            "char": 43
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 115,
                                        "char": 44
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 116,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 117,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "result",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 117,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 118,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 107,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                        "line": 107,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 106,
                    "last-line": 120,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getProcessorVar",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 120,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "processor",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 122,
                                    "char": 22
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 123,
                            "char": 11
                        },
                        {
                            "type": "try-catch",
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "processor",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 124,
                                                        "char": 34
                                                    },
                                                    "name": "getFormatter",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 124,
                                                    "char": 50
                                                },
                                                "name": "getProcessor",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                            "line": 124,
                                                            "char": 67
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 124,
                                                        "char": 67
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 124,
                                                "char": 68
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 124,
                                            "char": 68
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 125,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "cast",
                                        "left": "string",
                                        "right": {
                                            "type": "variable",
                                            "value": "processor",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 125,
                                            "char": 38
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 125,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 126,
                                    "char": 9
                                }
                            ],
                            "catches": [
                                {
                                    "classes": [
                                        {
                                            "type": "variable",
                                            "value": "\\Exception",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 126,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 128,
                                    "char": 14
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 128,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "string",
                                "value": "undefined",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 128,
                                "char": 25
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 129,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 121,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                        "line": 121,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 120,
                    "last-line": 131,
                    "char": 19
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
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 131,
                            "char": 43
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 133,
                                    "char": 21
                                },
                                "name": "getProcessorVar",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "property",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 133,
                                            "char": 46
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 133,
                                        "char": 46
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 133,
                                "char": 47
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 134,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 131,
                    "last-line": 136,
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
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 138,
                                    "char": 14
                                },
                                "name": "close",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 138,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 139,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 136,
                    "last-line": 141,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__wakeup",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "type",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 143,
                                    "char": 17
                                },
                                {
                                    "variable": "ext",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 143,
                                    "char": 22
                                },
                                {
                                    "variable": "handler",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 143,
                                    "char": 31
                                },
                                {
                                    "variable": "ext2Handler",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 143,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 143,
                                    "char": 49
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 144,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 144,
                                    "char": 31
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "type2Ext",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 144,
                                    "char": 41
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                "line": 144,
                                "char": 41
                            },
                            "key": "type",
                            "value": "ext",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fetch",
                                        "left": {
                                            "type": "variable",
                                            "value": "handler",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 145,
                                            "char": 48
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "ext2Handler",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 145,
                                                "char": 42
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "ext",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 145,
                                                "char": 46
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 145,
                                            "char": 48
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 145,
                                        "char": 48
                                    },
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "handler",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                            "line": 148,
                                                            "char": 36
                                                        },
                                                        "name": "open",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "property-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "this",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                                            "line": 148,
                                                                            "char": 47
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "_path",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                                            "line": 148,
                                                                            "char": 54
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                                        "line": 148,
                                                                        "char": 54
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "ext",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                                        "line": 148,
                                                                        "char": 59
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                                    "line": 148,
                                                                    "char": 59
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                                "line": 148,
                                                                "char": 59
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 148,
                                                        "char": 60
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 148,
                                                    "char": 60
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 149,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "ext2Handler",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "ext",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                            "line": 149,
                                                            "char": 36
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "handler",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                        "line": 149,
                                                        "char": 47
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 149,
                                                    "char": 47
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 150,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 151,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property-array-index",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "type2Handler",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "type",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                    "line": 151,
                                                    "char": 40
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "handler",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 151,
                                                "char": 51
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 151,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 152,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 153,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_fileHandler",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 153,
                                                "char": 39
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "type2Handler",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                                "line": 153,
                                                "char": 52
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 153,
                                            "char": 52
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "-1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                            "line": 153,
                                            "char": 55
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                        "line": 153,
                                        "char": 56
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                                    "line": 153,
                                    "char": 56
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                            "line": 154,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
                    "line": 141,
                    "last-line": 155,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
            "line": 5,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Adapter\/FilePlus.zep",
        "line": 5,
        "char": 5
    }
]