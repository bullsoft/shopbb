[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Db\\UnitOfWork",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "\\PhalconPlus\\Db\\UnitOfWork",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                "line": 2,
                "char": 31
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
        "line": 4,
        "char": 5
    },
    {
        "type": "class",
        "name": "Field",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractValue",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "model",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                        "line": 6,
                        "char": 27
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                    "line": 7,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "attr",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                        "line": 7,
                        "char": 22
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
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
                            "name": "model",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\Mvc\\Model",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                "line": 9,
                                "char": 58
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 9,
                            "char": 59
                        },
                        {
                            "type": "parameter",
                            "name": "attr",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 9,
                            "char": 73
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
                                    "property": "model",
                                    "expr": {
                                        "type": "variable",
                                        "value": "model",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 11,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 11,
                                    "char": 32
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 12,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "attr",
                                    "expr": {
                                        "type": "variable",
                                        "value": "attr",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 12,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 12,
                                    "char": 30
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 13,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                    "line": 9,
                    "last-line": 15,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getValue",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "unitwork",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "UnitOfWork",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                "line": 15,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 15,
                            "char": 51
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "className",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "get_class",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 17,
                                                        "char": 40
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "model",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 17,
                                                        "char": 46
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 17,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 17,
                                                "char": 46
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 17,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 17,
                                    "char": 47
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 18,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "hash",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "spl_object_hash",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 18,
                                                        "char": 41
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "model",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 18,
                                                        "char": 47
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 18,
                                                    "char": 47
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 18,
                                                "char": 47
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 18,
                                        "char": 48
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 18,
                                    "char": 48
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 19,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "objs",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "unitwork",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                            "line": 19,
                                            "char": 29
                                        },
                                        "name": "getObjects",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 19,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 19,
                                    "char": 42
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 21,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "objs",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 21,
                                    "char": 17
                                },
                                "name": "contains",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 21,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "model",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 21,
                                                "char": 38
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                            "line": 21,
                                            "char": 38
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 21,
                                        "char": 38
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                "line": 21,
                                "char": 40
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "attr",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 22,
                                                    "char": 29
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "attr",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 22,
                                                    "char": 34
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 22,
                                                "char": 34
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                            "line": 22,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 23,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "property_exists",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 23,
                                                        "char": 37
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "model",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 23,
                                                        "char": 43
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 23,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 23,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "attr",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 23,
                                                    "char": 49
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 23,
                                                "char": 49
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 23,
                                        "char": 51
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "property-dynamic-access",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 24,
                                                        "char": 29
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "model",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 24,
                                                        "char": 36
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 24,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "attr",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 24,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 24,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                            "line": 25,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 26,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 26,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 27,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 29,
                            "char": 13
                        },
                        {
                            "type": "throw",
                            "expr": {
                                "type": "new",
                                "class": "\\PhalconPlus\\Base\\Exception",
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
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "Object(",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                            "line": 29,
                                                            "char": 54
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "hash",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                            "line": 29,
                                                            "char": 59
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 29,
                                                        "char": 59
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": ") instance of ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                        "line": 29,
                                                        "char": 74
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 29,
                                                    "char": 74
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "className",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 29,
                                                    "char": 84
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 29,
                                                "char": 84
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": " not in SplObjectStorage",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 29,
                                                "char": 109
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                            "line": 29,
                                            "char": 109
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 29,
                                        "char": 109
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                "line": 29,
                                "char": 110
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 30,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                    "line": 15,
                    "last-line": 32,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getField",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "unitwork",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "UnitOfWork",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                "line": 32,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 32,
                            "char": 51
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
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 34,
                                    "char": 21
                                },
                                "name": "getValue",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "unitwork",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                            "line": 34,
                                            "char": 39
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 34,
                                        "char": 39
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                "line": 34,
                                "char": 40
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 35,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                    "line": 32,
                    "last-line": 37,
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
                                "type": "concat",
                                "left": {
                                    "type": "concat",
                                    "left": {
                                        "type": "concat",
                                        "left": {
                                            "type": "string",
                                            "value": "Field: ",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                            "line": 39,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 39,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "attr",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 39,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                            "line": 39,
                                            "char": 37
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 39,
                                        "char": 37
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": ", Hash: ",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                        "line": 39,
                                        "char": 48
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 39,
                                    "char": 48
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "spl_object_hash",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 39,
                                                    "char": 71
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                    "line": 39,
                                                    "char": 77
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                                "line": 39,
                                                "char": 77
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                            "line": 39,
                                            "char": 77
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                    "line": 39,
                                    "char": 78
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                                "line": 39,
                                "char": 78
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                            "line": 40,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
                    "line": 37,
                    "last-line": 41,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
            "line": 4,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/Field.zep",
        "line": 4,
        "char": 5
    }
]