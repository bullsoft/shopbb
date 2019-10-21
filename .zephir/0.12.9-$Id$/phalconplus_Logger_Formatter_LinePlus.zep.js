[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Logger\\Formatter",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "LinePlus",
        "abstract": 0,
        "final": 0,
        "extends": "\\Phalcon\\Logger\\Formatter",
        "implements": [
            {
                "type": "variable",
                "value": "\\Phalcon\\Logger\\FormatterInterface",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                "line": 4,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "processors",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                        "line": 5,
                        "char": 28
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                    "line": 7,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "formatString",
                    "default": {
                        "type": "string",
                        "value": "[%date%][%type%] %message%",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                        "line": 7,
                        "char": 54
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                    "line": 9,
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
                            "name": "formatString",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 9,
                            "char": 53
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
                                        "type": "variable",
                                        "value": "formatString",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 11,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 11,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 11,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "formatString",
                                            "expr": {
                                                "type": "variable",
                                                "value": "formatString",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 12,
                                                "char": 50
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 12,
                                            "char": 50
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 13,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 17,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                    "line": 9,
                    "last-line": 19,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "format",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 19,
                            "char": 35
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 19,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "timestamp",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 19,
                            "char": 52
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 19,
                                "char": 72
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 19,
                            "char": 72
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "processors",
                                    "index-expr": [
                                        {
                                            "type": "string",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 21,
                                            "char": 37
                                        }
                                    ],
                                    "expr": {
                                        "type": "variable",
                                        "value": "message",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 21,
                                        "char": 48
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 21,
                                    "char": 48
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 22,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "processors",
                                    "index-expr": [
                                        {
                                            "type": "string",
                                            "value": "date",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 22,
                                            "char": 34
                                        }
                                    ],
                                    "expr": {
                                        "type": "fcall",
                                        "name": "date",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Y-m-d H:i:s",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 22,
                                                    "char": 54
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 22,
                                                "char": 54
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "timestamp",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 22,
                                                    "char": 65
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 22,
                                                "char": 65
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 22,
                                        "char": 66
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 22,
                                    "char": 66
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 23,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "processors",
                                    "index-expr": [
                                        {
                                            "type": "string",
                                            "value": "type",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 23,
                                            "char": 34
                                        }
                                    ],
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 23,
                                            "char": 43
                                        },
                                        "name": "getTypeString",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "type",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 23,
                                                    "char": 62
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 23,
                                                "char": 62
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 23,
                                        "char": 63
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 23,
                                    "char": 63
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 25,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "matches",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 25,
                                        "char": 25
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 25,
                                    "char": 25
                                },
                                {
                                    "variable": "result",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 25,
                                    "char": 33
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 26,
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
                                        "type": "fcall",
                                        "name": "preg_match_all",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "\/%(\\w+)%\/",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 26,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 26,
                                                "char": 46
                                            },
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 26,
                                                        "char": 53
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "formatString",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 26,
                                                        "char": 66
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 26,
                                                    "char": 66
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 26,
                                                "char": 66
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "matches",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 26,
                                                    "char": 75
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 26,
                                                "char": 75
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 26,
                                        "char": 76
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 26,
                                    "char": 76
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 28,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "result",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 28,
                                    "char": 20
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 28,
                                    "char": 28
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 28,
                                "char": 28
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\InvalidArgumentException",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "Logger format is not valid: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 29,
                                                        "char": 78
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                            "line": 29,
                                                            "char": 85
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "formatString",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                            "line": 29,
                                                            "char": 98
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 29,
                                                        "char": 98
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 29,
                                                    "char": 98
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 29,
                                                "char": 98
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 29,
                                        "char": 99
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 30,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 32,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "replace0",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 32,
                                    "char": 21
                                },
                                {
                                    "variable": "replace1",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 32,
                                    "char": 31
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 33,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "replace0",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "reset",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "matches",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 33,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 33,
                                                "char": 37
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 33,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 33,
                                    "char": 38
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 34,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "replace1",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "end",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "matches",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 34,
                                                    "char": 35
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 34,
                                                "char": 35
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 34,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 34,
                                    "char": 36
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 36,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "val1",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 36,
                                    "char": 17
                                },
                                {
                                    "variable": "val2",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 36,
                                    "char": 23
                                },
                                {
                                    "variable": "processors",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 36,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 36,
                                    "char": 40
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 38,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "replace1",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 38,
                                "char": 30
                            },
                            "value": "val1",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fetch",
                                        "left": {
                                            "type": "variable",
                                            "value": "val2",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 39,
                                            "char": 51
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 39,
                                                    "char": 33
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "processors",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 39,
                                                    "char": 44
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 39,
                                                "char": 44
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "val1",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 39,
                                                "char": 49
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 39,
                                            "char": 51
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 39,
                                        "char": 51
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "processors",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "val1",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                            "line": 40,
                                                            "char": 36
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "strval",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "val2",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                                    "line": 40,
                                                                    "char": 51
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                                "line": 40,
                                                                "char": 51
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 40,
                                                        "char": 52
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 40,
                                                    "char": 52
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 41,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "processors",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "val1",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                            "line": 42,
                                                            "char": 36
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "string",
                                                        "value": "undefined",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 42,
                                                        "char": 49
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 42,
                                                    "char": 49
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 43,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 44,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 46,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "logStr",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 46,
                                    "char": 19
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 47,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "logStr",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "str_replace",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "replace0",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 47,
                                                    "char": 42
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 47,
                                                "char": 42
                                            },
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "array_values",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "processors",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                                "line": 47,
                                                                "char": 67
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                            "line": 47,
                                                            "char": 67
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 47,
                                                    "char": 68
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 47,
                                                "char": 68
                                            },
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 47,
                                                        "char": 75
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "formatString",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 47,
                                                        "char": 88
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 47,
                                                    "char": 88
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 47,
                                                "char": 88
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 47,
                                        "char": 89
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 47,
                                    "char": 89
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 48,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "concat",
                                "left": {
                                    "type": "variable",
                                    "value": "logStr",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 48,
                                    "char": 23
                                },
                                "right": {
                                    "type": "constant",
                                    "value": "PHP_EOL",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 48,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 48,
                                "char": 32
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 49,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 19,
                                "char": 83
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 20,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                        "line": 20,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                    "line": 19,
                    "last-line": 51,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "addProcessor",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 51,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "processor",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\PhalconPlus\\Logger\\Processor\\AbstractProcessor",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 51,
                                "char": 106
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 51,
                            "char": 107
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "processors",
                                    "index-expr": [
                                        {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 53,
                                            "char": 34
                                        }
                                    ],
                                    "expr": {
                                        "type": "variable",
                                        "value": "processor",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 53,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 53,
                                    "char": 47
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 54,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                    "line": 51,
                    "last-line": 56,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getProcessor",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 56,
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
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 58,
                                                "char": 24
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "processors",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 58,
                                                "char": 35
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 58,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 58,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 58,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 58,
                                    "char": 42
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 58,
                                "char": 42
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\InvalidArgumentException",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "Processor name is not valid: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 59,
                                                        "char": 79
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                        "line": 59,
                                                        "char": 85
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                    "line": 59,
                                                    "char": 85
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 59,
                                                "char": 85
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 59,
                                        "char": 86
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 60,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 61,
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 61,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "processors",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 61,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 61,
                                    "char": 32
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "name",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 61,
                                    "char": 37
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 61,
                                "char": 38
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 62,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                    "line": 56,
                    "last-line": 64,
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
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 64,
                            "char": 38
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
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 66,
                                                "char": 24
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "processors",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                                "line": 66,
                                                "char": 35
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 66,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "key",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 66,
                                            "char": 39
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 66,
                                        "char": 41
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 66,
                                    "char": 41
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 66,
                                "char": 41
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "string",
                                        "value": "undefined",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 67,
                                        "char": 29
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 68,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 69,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "cast",
                                "left": "string",
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 69,
                                            "char": 30
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "processors",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                            "line": 69,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 69,
                                        "char": 41
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "key",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                        "line": 69,
                                        "char": 45
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                    "line": 69,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                                "line": 69,
                                "char": 46
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                            "line": 70,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
                    "line": 64,
                    "last-line": 71,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Formatter\/LinePlus.zep",
        "line": 3,
        "char": 5
    }
]