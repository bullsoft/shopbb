[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Db\\UnitOfWork",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "\\PhalconPlus\\Db\\UnitOfWork",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                "line": 2,
                "char": 31
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
        "line": 4,
        "char": 5
    },
    {
        "type": "class",
        "name": "LastInsertId",
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
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                    "line": 8,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                "line": 8,
                                "char": 58
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                            "line": 8,
                            "char": 59
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                        "line": 10,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 10,
                                    "char": 32
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                            "line": 11,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                    "line": 8,
                    "last-line": 13,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                "line": 13,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                            "line": 13,
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
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 15,
                                                        "char": 40
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "model",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 15,
                                                        "char": 46
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 15,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 15,
                                                "char": 46
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                        "line": 15,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 15,
                                    "char": 47
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                            "line": 16,
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
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 16,
                                                        "char": 41
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "model",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 16,
                                                        "char": 47
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 16,
                                                    "char": 47
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 16,
                                                "char": 47
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                        "line": 16,
                                        "char": 48
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 16,
                                    "char": 48
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                            "line": 17,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "inserted",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "unitwork",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                            "line": 17,
                                            "char": 33
                                        },
                                        "name": "getInserted",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                        "line": 17,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 17,
                                    "char": 47
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                            "line": 19,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "inserted",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 19,
                                    "char": 21
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
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 19,
                                                "char": 36
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "model",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 19,
                                                "char": 42
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                            "line": 19,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                        "line": 19,
                                        "char": 42
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                "line": 19,
                                "char": 44
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "info",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "inserted",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 20,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 20,
                                                        "char": 38
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "model",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 20,
                                                        "char": 44
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 20,
                                                    "char": 44
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 20,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                            "line": 20,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 21,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "isset",
                                            "left": {
                                                "type": "list",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "info",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 21,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "last_insert_id",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 21,
                                                        "char": 41
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 21,
                                                    "char": 42
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 21,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                            "line": 21,
                                            "char": 45
                                        },
                                        "right": {
                                            "type": "greater",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "info",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 21,
                                                    "char": 51
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "last_insert_id",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 21,
                                                    "char": 66
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 21,
                                                "char": 68
                                            },
                                            "right": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 21,
                                                "char": 72
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                            "line": 21,
                                            "char": 72
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                        "line": 21,
                                        "char": 72
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "intval",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "info",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                                "line": 22,
                                                                "char": 35
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "last_insert_id",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                                "line": 22,
                                                                "char": 50
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                            "line": 22,
                                                            "char": 51
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 22,
                                                        "char": 51
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 22,
                                                "char": 52
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                            "line": 23,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 24,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                        "line": 24,
                                        "char": 21
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 25,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                            "line": 27,
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
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                            "line": 27,
                                                            "char": 54
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "hash",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                            "line": 27,
                                                            "char": 59
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 27,
                                                        "char": 59
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": ") instance of ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                        "line": 27,
                                                        "char": 74
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 27,
                                                    "char": 74
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "className",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 27,
                                                    "char": 84
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 27,
                                                "char": 84
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": " not in SplObjectStorage",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 27,
                                                "char": 109
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                            "line": 27,
                                            "char": 109
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                        "line": 27,
                                        "char": 109
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                "line": 27,
                                "char": 110
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                            "line": 28,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                    "line": 13,
                    "last-line": 30,
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
                                    "type": "string",
                                    "value": "LastInsertId: ",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 32,
                                    "char": 31
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
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 32,
                                                    "char": 54
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                    "line": 32,
                                                    "char": 60
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                                "line": 32,
                                                "char": 60
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                            "line": 32,
                                            "char": 60
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                    "line": 32,
                                    "char": 61
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                                "line": 32,
                                "char": 61
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                            "line": 33,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
                    "line": 30,
                    "last-line": 34,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
            "line": 4,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork\/LastInsertId.zep",
        "line": 4,
        "char": 5
    }
]