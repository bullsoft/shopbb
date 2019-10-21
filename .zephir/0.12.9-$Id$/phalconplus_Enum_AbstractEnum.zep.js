[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Enum",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
        "line": 3,
        "char": 8
    },
    {
        "type": "class",
        "name": "AbstractEnum",
        "abstract": 1,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "\\JsonSerializable",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                "line": 4,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "val",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                    "line": 7,
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
                            "name": "val",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "__PhalconPlus_AbstractEnum_DefaultValue__",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 7,
                                "char": 84
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 7,
                            "char": 84
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "reflection",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 9,
                                    "char": 23
                                },
                                {
                                    "variable": "defaultVal",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 9,
                                    "char": 35
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 11,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "reflection",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\ReflectionClass",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "get_called_class",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 11,
                                                    "char": 65
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 11,
                                                "char": 65
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 11,
                                        "char": 66
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 11,
                                    "char": 66
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 12,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "reflection",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 12,
                                        "char": 23
                                    },
                                    "name": "hasConstant",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": "__default",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 12,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 12,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 12,
                                    "char": 46
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 12,
                                "char": 48
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "defaultVal",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "reflection",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 13,
                                                    "char": 41
                                                },
                                                "name": "getConstant",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "__default",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                            "line": 13,
                                                            "char": 63
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                        "line": 13,
                                                        "char": 63
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 13,
                                                "char": 64
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 13,
                                            "char": 64
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 14,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "static",
                                            "dynamic": 0,
                                            "name": "isValid",
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "defaultVal",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                        "line": 14,
                                                        "char": 43
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 14,
                                                    "char": 43
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 14,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 14,
                                        "char": 45
                                    },
                                    "statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\OutOfRangeException",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "sprintf",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "Invalid __default enumeration %s for Enum %s",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                        "line": 15,
                                                                        "char": 100
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                    "line": 15,
                                                                    "char": 100
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "defaultVal",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                        "line": 15,
                                                                        "char": 112
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                    "line": 15,
                                                                    "char": 112
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "fcall",
                                                                        "name": "get_class",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "variable",
                                                                                    "value": "this",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                                    "line": 15,
                                                                                    "char": 128
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                                "line": 15,
                                                                                "char": 128
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                        "line": 15,
                                                                        "char": 129
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                    "line": 15,
                                                                    "char": 129
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                            "line": 15,
                                                            "char": 130
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                        "line": 15,
                                                        "char": 130
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 15,
                                                "char": 131
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 16,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 17,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 19,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 19,
                                    "char": 17
                                },
                                "right": {
                                    "type": "string",
                                    "value": "__PhalconPlus_AbstractEnum_DefaultValue__",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 19,
                                    "char": 61
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 19,
                                "char": 61
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 20,
                                            "char": 18
                                        },
                                        "name": "setValue",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "defaultVal",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 20,
                                                    "char": 38
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 20,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 20,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 21,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 22,
                                            "char": 18
                                        },
                                        "name": "setValue",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "val",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 22,
                                                    "char": 31
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 22,
                                                "char": 31
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 22,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 23,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 24,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                    "line": 7,
                    "last-line": 26,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "setValue",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "val",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 26,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "scall",
                                    "dynamic-class": 0,
                                    "class": "static",
                                    "dynamic": 0,
                                    "name": "isValid",
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "val",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 28,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 28,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 28,
                                    "char": 34
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 28,
                                "char": 34
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
                                                    "type": "fcall",
                                                    "name": "sprintf",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "Invalid enumeration %s for Enum %s",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                "line": 29,
                                                                "char": 91
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                            "line": 29,
                                                            "char": 91
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "val",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                "line": 29,
                                                                "char": 96
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                            "line": 29,
                                                            "char": 96
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "fcall",
                                                                "name": "get_class",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "this",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                            "line": 29,
                                                                            "char": 112
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                        "line": 29,
                                                                        "char": 112
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                "line": 29,
                                                                "char": 113
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                            "line": 29,
                                                            "char": 113
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 29,
                                                    "char": 114
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 29,
                                                "char": 114
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 29,
                                        "char": 115
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 30,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
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
                                    "property": "val",
                                    "expr": {
                                        "type": "variable",
                                        "value": "val",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 31,
                                        "char": 28
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 31,
                                    "char": 28
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 32,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                    "line": 26,
                    "last-line": 34,
                    "char": 22
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getValue",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 36,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 36,
                                    "char": 25
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 36,
                                "char": 25
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 37,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                    "line": 34,
                    "last-line": 39,
                    "char": 19
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "isValid",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "val",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 39,
                            "char": 39
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "in_array",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "val",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 41,
                                                "char": 25
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 41,
                                            "char": 25
                                        },
                                        {
                                            "parameter": {
                                                "type": "scall",
                                                "dynamic-class": 0,
                                                "class": "static",
                                                "dynamic": 0,
                                                "name": "validValues",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 41,
                                                "char": 48
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 41,
                                            "char": 48
                                        },
                                        {
                                            "parameter": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 41,
                                                "char": 54
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 41,
                                            "char": 54
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 41,
                                    "char": 56
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 41,
                                "char": 56
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 42,
                                        "char": 25
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 43,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 44,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 44,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 45,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                    "line": 39,
                    "last-line": 47,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "commaString",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "vals",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "validValues",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "bool",
                                                    "value": "true",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 49,
                                                    "char": 44
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 49,
                                                "char": 44
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 49,
                                        "char": 45
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 49,
                                    "char": 45
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 50,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "implode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": ", ",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 50,
                                            "char": 26
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 50,
                                        "char": 26
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "vals",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 50,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 50,
                                        "char": 32
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 50,
                                "char": 33
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 51,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                    "line": 47,
                    "last-line": 53,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "validValues",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "assoc",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 53,
                                "char": 58
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 53,
                            "char": 58
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "reflection",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 55,
                                    "char": 23
                                },
                                {
                                    "variable": "consts",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 55,
                                    "char": 31
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 57,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "reflection",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\ReflectionClass",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "get_called_class",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 57,
                                                    "char": 65
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 57,
                                                "char": 65
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 57,
                                        "char": 66
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 57,
                                    "char": 66
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 58,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "consts",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "reflection",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 58,
                                            "char": 33
                                        },
                                        "name": "getConstants",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 58,
                                        "char": 48
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 58,
                                    "char": 48
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 59,
                            "char": 13
                        },
                        {
                            "type": "unset",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "consts",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 59,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "__default",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 59,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 59,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 59,
                                "char": 33
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 61,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "countValues",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 61,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 62,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "countValues",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_count_values",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "consts",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 62,
                                                    "char": 52
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 62,
                                                "char": 52
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 62,
                                        "char": 53
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 62,
                                    "char": 53
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 64,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "fcall",
                                    "name": "count",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "consts",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 64,
                                                "char": 24
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 64,
                                            "char": 24
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 64,
                                    "char": 28
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "count",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "countValues",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 64,
                                                "char": 47
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 64,
                                            "char": 47
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 64,
                                    "char": 49
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 64,
                                "char": 49
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "duplicated",
                                            "expr": {
                                                "type": "empty-array",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 65,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 65,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 66,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "duplicated",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "array_filter",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "countValues",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                            "line": 66,
                                                            "char": 54
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                        "line": 66,
                                                        "char": 54
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "closure",
                                                            "left": [
                                                                {
                                                                    "type": "parameter",
                                                                    "name": "freq",
                                                                    "const": 0,
                                                                    "data-type": "variable",
                                                                    "mandatory": 0,
                                                                    "reference": 0,
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                    "line": 66,
                                                                    "char": 69
                                                                }
                                                            ],
                                                            "right": [
                                                                {
                                                                    "type": "return",
                                                                    "expr": {
                                                                        "type": "greater",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "freq",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                            "line": 67,
                                                                            "char": 29
                                                                        },
                                                                        "right": {
                                                                            "type": "int",
                                                                            "value": "1",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                            "line": 67,
                                                                            "char": 32
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                        "line": 67,
                                                                        "char": 32
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                    "line": 68,
                                                                    "char": 13
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                            "line": 68,
                                                            "char": 14
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                        "line": 68,
                                                        "char": 14
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 68,
                                                "char": 15
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                            "line": 68,
                                            "char": 15
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 69,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\RuntimeException",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "string",
                                                                "value": "Duplicated values were found in Enum Class: ",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                "line": 69,
                                                                "char": 86
                                                            },
                                                            "right": {
                                                                "type": "fcall",
                                                                "name": "get_called_class",
                                                                "call-type": 1,
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                "line": 69,
                                                                "char": 106
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                            "line": 69,
                                                            "char": 106
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": " with values in ",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                            "line": 69,
                                                            "char": 125
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                        "line": 69,
                                                        "char": 125
                                                    },
                                                    "right": {
                                                        "type": "fcall",
                                                        "name": "json_encode",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "fcall",
                                                                    "name": "array_keys",
                                                                    "call-type": 1,
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "variable",
                                                                                "value": "duplicated",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                                "line": 69,
                                                                                "char": 160
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                            "line": 69,
                                                                            "char": 160
                                                                        }
                                                                    ],
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                    "line": 69,
                                                                    "char": 161
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                                "line": 69,
                                                                "char": 161
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                        "line": 69,
                                                        "char": 162
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 69,
                                                    "char": 162
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 69,
                                                "char": 162
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 69,
                                        "char": 163
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 70,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 72,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "assoc",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 72,
                                    "char": 19
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 72,
                                    "char": 26
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 72,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "consts",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 73,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 74,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_values",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "consts",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                    "line": 75,
                                                    "char": 39
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                                "line": 75,
                                                "char": 39
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 75,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 76,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 77,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                    "line": 66,
                    "last-line": 79,
                    "char": 63
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "jsonSerialize",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 81,
                                    "char": 21
                                },
                                "name": "getValue",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 81,
                                "char": 32
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 82,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                    "line": 79,
                    "last-line": 84,
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
                            "type": "return",
                            "expr": {
                                "type": "cast",
                                "left": "string",
                                "right": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                        "line": 86,
                                        "char": 30
                                    },
                                    "name": "getValue",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                    "line": 86,
                                    "char": 41
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                                "line": 86,
                                "char": 41
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                            "line": 87,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
                    "line": 84,
                    "last-line": 88,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
            "line": 3,
            "char": 14
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/AbstractEnum.zep",
        "line": 3,
        "char": 14
    }
]