[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Db\\Pdo",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Mysql",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractMysql",
        "definition": {
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
                            "name": "descriptor",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 5,
                            "char": 50
                        },
                        {
                            "type": "parameter",
                            "name": "autoConnect",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                "line": 5,
                                "char": 78
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 5,
                            "char": 78
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "autoConnect",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                "line": 7,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 8,
                                            "char": 18
                                        },
                                        "name": "connect",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "descriptor",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                    "line": 8,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                "line": 8,
                                                "char": 37
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 8,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 9,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "cblock",
                                    "value": "\n            zephir_unset_property(this_ptr, \"_pdo\");\n            ",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 13,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 19,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "dialectClass",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 19,
                                    "char": 25
                                },
                                {
                                    "variable": "connectionId",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 19,
                                    "char": 39
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 21,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "connectionId",
                                    "expr": {
                                        "type": "static-property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "self",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 21,
                                            "char": 56
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_connectionConsecutive",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 21,
                                            "char": 56
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 21,
                                        "char": 56
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 21,
                                    "char": 56
                                },
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_connectionId",
                                    "expr": {
                                        "type": "variable",
                                        "value": "connectionId",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 22,
                                        "char": 47
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 22,
                                    "char": 47
                                },
                                {
                                    "assign-type": "static-property",
                                    "operator": "assign",
                                    "variable": "self",
                                    "property": "_connectionConsecutive",
                                    "expr": {
                                        "type": "add",
                                        "left": {
                                            "type": "variable",
                                            "value": "connectionId",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 23,
                                            "char": 57
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 23,
                                            "char": 60
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 23,
                                        "char": 60
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 23,
                                    "char": 60
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 28,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "dialectClass",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 28,
                                        "char": 58
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "descriptor",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 28,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "dialectClass",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 28,
                                            "char": 56
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 28,
                                        "char": 58
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 28,
                                    "char": 58
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                "line": 28,
                                "char": 58
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "dialectClass",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "phalcon\\\\db\\\\dialect\\\\",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                    "line": 29,
                                                    "char": 55
                                                },
                                                "right": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                        "line": 29,
                                                        "char": 62
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_dialectType",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                        "line": 29,
                                                        "char": 75
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                    "line": 29,
                                                    "char": 75
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                "line": 29,
                                                "char": 75
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 29,
                                            "char": 75
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 30,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 35,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "dialectClass",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 35,
                                        "char": 33
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 35,
                                    "char": 33
                                },
                                "right": {
                                    "type": "string",
                                    "value": "string",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 35,
                                    "char": 42
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                "line": 35,
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
                                            "property": "_dialect",
                                            "expr": {
                                                "type": "new",
                                                "class": "dialectClass",
                                                "dynamic": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                "line": 36,
                                                "char": 54
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 36,
                                            "char": 54
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 37,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "equals",
                                        "left": {
                                            "type": "typeof",
                                            "left": {
                                                "type": "variable",
                                                "value": "dialectClass",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                "line": 38,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 38,
                                            "char": 37
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "object",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 38,
                                            "char": 46
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 38,
                                        "char": 46
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "_dialect",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "dialectClass",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                        "line": 39,
                                                        "char": 50
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                    "line": 39,
                                                    "char": 50
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 40,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 41,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 42,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_descriptor",
                                    "expr": {
                                        "type": "variable",
                                        "value": "descriptor",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 42,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 42,
                                    "char": 43
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 47,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                    "line": 5,
                    "last-line": 49,
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
                            "name": "prop",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 49,
                            "char": 39
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "prop",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 51,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "_pdo",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 51,
                                    "char": 25
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                "line": 51,
                                "char": 25
                            },
                            "statements": [
                                {
                                    "type": "cblock",
                                    "value": "\n            add_property_null_ex(this_ptr, SL(\"_pdo\") TSRMLS_CC);\n            ",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 55,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 55,
                                            "char": 18
                                        },
                                        "name": "connect",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                        "line": 55,
                                                        "char": 32
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_descriptor",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                        "line": 55,
                                                        "char": 44
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                    "line": 55,
                                                    "char": 44
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                                "line": 55,
                                                "char": 44
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 55,
                                        "char": 45
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 56,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 56,
                                            "char": 25
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_pdo",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                            "line": 56,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 56,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 57,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 58,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                "line": 58,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 59,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                    "line": 49,
                    "last-line": 61,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isUnderTransaction",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "prop",
                                    "expr": {
                                        "type": "string",
                                        "value": "_pdo",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 63,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 63,
                                    "char": 27
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 64,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "isPdoSet",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 64,
                                        "char": 25
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 64,
                                    "char": 25
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 80,
                            "char": 8
                        },
                        {
                            "type": "cblock",
                            "value": "\n        isPdoSet = Z_OBJ_HT_P(this_ptr)->has_property(this_ptr, &prop, 0, NULL);\n        \/\/ isPdoSet = zephir_isset_property(this_ptr, SL(\"_pdo\"));\n        ",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 83,
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
                                        "value": "isPdoSet",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 83,
                                        "char": 22
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 83,
                                        "char": 25
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 83,
                                    "char": 25
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                "line": 83,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                        "line": 84,
                                        "char": 25
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                    "line": 85,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 87,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "parent",
                                "dynamic": 0,
                                "name": "isUnderTransaction",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                "line": 87,
                                "char": 44
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                            "line": 88,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                                "line": 62,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                        "line": 62,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
                    "line": 61,
                    "last-line": 90,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Pdo\/Mysql.zep",
        "line": 3,
        "char": 5
    }
]