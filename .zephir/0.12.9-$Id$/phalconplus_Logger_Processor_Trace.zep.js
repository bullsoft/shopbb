[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Logger\\Processor",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Trace",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractProcessor",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "skipClassesPartials",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                        "line": 8,
                        "char": 37
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                    "line": 10,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "mode",
                    "default": {
                        "type": "static-constant-access",
                        "left": {
                            "type": "variable",
                            "value": "self",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 10,
                            "char": 32
                        },
                        "right": {
                            "type": "variable",
                            "value": "T_FILE",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 10,
                            "char": 32
                        },
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                        "line": 10,
                        "char": 32
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                    "line": 12,
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
                            "name": "mode",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "static-constant-access",
                                "left": {
                                    "type": "variable",
                                    "value": "self",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 12,
                                    "char": 56
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "T_FILE",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 12,
                                    "char": 56
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                "line": 12,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 12,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "skipClassesPartials",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                "line": 12,
                                "char": 88
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 12,
                            "char": 88
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
                                    "property": "mode",
                                    "expr": {
                                        "type": "variable",
                                        "value": "mode",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 14,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 14,
                                    "char": 30
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 15,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "variable",
                                    "value": "skipClassesPartials",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 15,
                                    "char": 38
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                "line": 15,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "skipClassesPartials",
                                            "expr": {
                                                "type": "array",
                                                "left": [
                                                    {
                                                        "value": {
                                                            "type": "string",
                                                            "value": "PhalconPlus\\\\",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 16,
                                                            "char": 59
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 16,
                                                        "char": 59
                                                    },
                                                    {
                                                        "value": {
                                                            "type": "string",
                                                            "value": "Phalcon\\\\",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 16,
                                                            "char": 70
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 16,
                                                        "char": 70
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 16,
                                                "char": 71
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 16,
                                            "char": 71
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 17,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 18,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                    "line": 12,
                    "last-line": 20,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__toString",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "trace",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 22,
                                    "char": 18
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 23,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "trace",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "debug_backtrace",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 23,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 23,
                                    "char": 38
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 26,
                            "char": 19
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "array_shift",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "trace",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 26,
                                            "char": 26
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 26,
                                        "char": 26
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                "line": 26,
                                "char": 27
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 28,
                            "char": 19
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "array_shift",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "trace",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 28,
                                            "char": 26
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 28,
                                        "char": 26
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                "line": 28,
                                "char": 27
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 30,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "i",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 30,
                                        "char": 18
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 30,
                                    "char": 18
                                },
                                {
                                    "variable": "part",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 30,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 32,
                            "char": 13
                        },
                        {
                            "type": "cblock",
                            "value": "CHECK:",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 33,
                            "char": 13
                        },
                        {
                            "type": "while",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "trace",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 33,
                                                "char": 26
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "i",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 33,
                                                "char": 28
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 33,
                                            "char": 29
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "class",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 33,
                                            "char": 35
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 33,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 33,
                                    "char": 38
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                "line": 33,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 35,
                                            "char": 30
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "skipClassesPartials",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 35,
                                            "char": 51
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 35,
                                        "char": 51
                                    },
                                    "value": "part",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "not-identical",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "strpos",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "trace",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 36,
                                                                        "char": 32
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "i",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 36,
                                                                        "char": 34
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 36,
                                                                    "char": 35
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "class",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 36,
                                                                    "char": 41
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 36,
                                                                "char": 42
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 36,
                                                            "char": 42
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "part",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 36,
                                                                "char": 48
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 36,
                                                            "char": 48
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 36,
                                                    "char": 52
                                                },
                                                "right": {
                                                    "type": "bool",
                                                    "value": "false",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 36,
                                                    "char": 60
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 36,
                                                "char": 60
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "i",
                                                            "expr": {
                                                                "type": "add",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "i",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 37,
                                                                    "char": 31
                                                                },
                                                                "right": {
                                                                    "type": "int",
                                                                    "value": "1",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 37,
                                                                    "char": 34
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 37,
                                                                "char": 34
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 37,
                                                            "char": 34
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 38,
                                                    "char": 30
                                                },
                                                {
                                                    "type": "cblock",
                                                    "value": "goto CHECK;",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 39,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 40,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 41,
                                    "char": 17
                                },
                                {
                                    "type": "break",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 42,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 44,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "j",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 44,
                                    "char": 14
                                },
                                {
                                    "variable": "trace1",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 44,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 44,
                                    "char": 27
                                },
                                {
                                    "variable": "trace2",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 44,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 44,
                                    "char": 40
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 45,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "j",
                                    "expr": {
                                        "type": "sub",
                                        "left": {
                                            "type": "variable",
                                            "value": "i",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 45,
                                            "char": 19
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 45,
                                            "char": 22
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 45,
                                        "char": 22
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 45,
                                    "char": 22
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 47,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "trace1",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "file",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 48,
                                                    "char": 23
                                                },
                                                "value": {
                                                    "type": "ternary",
                                                    "left": {
                                                        "type": "isset",
                                                        "left": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "trace",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 48,
                                                                        "char": 36
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "j",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 48,
                                                                        "char": 38
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 48,
                                                                    "char": 39
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "file",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 48,
                                                                    "char": 44
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 48,
                                                                "char": 45
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 48,
                                                            "char": 47
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 48,
                                                        "char": 47
                                                    },
                                                    "right": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "trace",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 48,
                                                                "char": 54
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "j",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 48,
                                                                "char": 56
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 48,
                                                            "char": 57
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "file",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 48,
                                                            "char": 62
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 48,
                                                        "char": 64
                                                    },
                                                    "extra": {
                                                        "type": "string",
                                                        "value": "Nil",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 48,
                                                        "char": 69
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 48,
                                                    "char": 69
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 48,
                                                "char": 69
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "line",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 49,
                                                    "char": 23
                                                },
                                                "value": {
                                                    "type": "ternary",
                                                    "left": {
                                                        "type": "isset",
                                                        "left": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "trace",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 49,
                                                                        "char": 36
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "j",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 49,
                                                                        "char": 38
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 49,
                                                                    "char": 39
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "line",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 49,
                                                                    "char": 44
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 49,
                                                                "char": 45
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 49,
                                                            "char": 47
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 49,
                                                        "char": 47
                                                    },
                                                    "right": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "trace",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 49,
                                                                "char": 54
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "j",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 49,
                                                                "char": 56
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 49,
                                                            "char": 57
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "line",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 49,
                                                            "char": 62
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 49,
                                                        "char": 64
                                                    },
                                                    "extra": {
                                                        "type": "int",
                                                        "value": "-1",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 50,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 50,
                                                    "char": 9
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 50,
                                                "char": 9
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 50,
                                        "char": 10
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 50,
                                    "char": 10
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 52,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "trace2",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "class",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 53,
                                                    "char": 23
                                                },
                                                "value": {
                                                    "type": "ternary",
                                                    "left": {
                                                        "type": "isset",
                                                        "left": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "trace",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 53,
                                                                        "char": 36
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "i",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 53,
                                                                        "char": 38
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 53,
                                                                    "char": 39
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "class",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 53,
                                                                    "char": 45
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 53,
                                                                "char": 46
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 53,
                                                            "char": 48
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 53,
                                                        "char": 48
                                                    },
                                                    "right": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "trace",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 53,
                                                                "char": 55
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "i",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 53,
                                                                "char": 57
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 53,
                                                            "char": 58
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "class",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 53,
                                                            "char": 64
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 53,
                                                        "char": 66
                                                    },
                                                    "extra": {
                                                        "type": "string",
                                                        "value": "Nil",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 53,
                                                        "char": 71
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 53,
                                                    "char": 71
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 53,
                                                "char": 71
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "function",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 54,
                                                    "char": 23
                                                },
                                                "value": {
                                                    "type": "ternary",
                                                    "left": {
                                                        "type": "isset",
                                                        "left": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "trace",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 54,
                                                                        "char": 36
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "i",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                        "line": 54,
                                                                        "char": 38
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 54,
                                                                    "char": 39
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "function",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 54,
                                                                    "char": 48
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 54,
                                                                "char": 49
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 54,
                                                            "char": 51
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 54,
                                                        "char": 51
                                                    },
                                                    "right": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "trace",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 54,
                                                                "char": 58
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "i",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 54,
                                                                "char": 60
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 54,
                                                            "char": 61
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "function",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 54,
                                                            "char": 70
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 54,
                                                        "char": 72
                                                    },
                                                    "extra": {
                                                        "type": "string",
                                                        "value": "Nil",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 55,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 55,
                                                    "char": 9
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 55,
                                                "char": 9
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 55,
                                        "char": 10
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 55,
                                    "char": 10
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 57,
                            "char": 14
                        },
                        {
                            "type": "switch",
                            "expr": {
                                "type": "bitwise_and",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 57,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "mode",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 57,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 57,
                                    "char": 27
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0x0011",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 57,
                                    "char": 36
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                "line": 57,
                                "char": 36
                            },
                            "clauses": [
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "self",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 58,
                                            "char": 31
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "T_CLASS",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 58,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 58,
                                        "char": 31
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "join",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": ":",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 59,
                                                            "char": 30
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 59,
                                                        "char": 30
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "trace2",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 59,
                                                            "char": 38
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 59,
                                                        "char": 38
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 59,
                                                "char": 39
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 60,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 60,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "int",
                                        "value": "0x11",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 60,
                                        "char": 22
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "fcall",
                                                        "name": "join",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": ":",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 61,
                                                                    "char": 30
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 61,
                                                                "char": 30
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "trace1",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                    "line": 61,
                                                                    "char": 38
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 61,
                                                                "char": 38
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 61,
                                                        "char": 40
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "][",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 61,
                                                        "char": 45
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 61,
                                                    "char": 45
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "join",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": ":",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 61,
                                                                "char": 53
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 61,
                                                            "char": 53
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "trace2",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                                "line": 61,
                                                                "char": 61
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 61,
                                                            "char": 61
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                    "line": 61,
                                                    "char": 62
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 61,
                                                "char": 62
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 62,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 62,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "self",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 62,
                                            "char": 30
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "T_FILE",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 62,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                        "line": 62,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 63,
                                    "char": 19
                                },
                                {
                                    "type": "default",
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "join",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": ":",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 64,
                                                            "char": 30
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 64,
                                                        "char": 30
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "trace1",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                            "line": 64,
                                                            "char": 38
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                        "line": 64,
                                                        "char": 38
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                                "line": 64,
                                                "char": 39
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                            "line": 65,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                                    "line": 65,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                            "line": 66,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                    "line": 20,
                    "last-line": 67,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "T_FILE",
                    "default": {
                        "type": "int",
                        "value": "0x0001",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                        "line": 5,
                        "char": 26
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                    "line": 6,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "T_CLASS",
                    "default": {
                        "type": "int",
                        "value": "0x0010",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                        "line": 6,
                        "char": 27
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
                    "line": 8,
                    "char": 11
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Trace.zep",
        "line": 3,
        "char": 5
    }
]