[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Db",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Mysql",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "di",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 8,
                        "char": 22
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 9,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "descriptor",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 9,
                        "char": 28
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 10,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "options",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 10,
                        "char": 25
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 12,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "retryTimes",
                    "default": {
                        "type": "static-constant-access",
                        "left": {
                            "type": "variable",
                            "value": "self",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 12,
                            "char": 43
                        },
                        "right": {
                            "type": "variable",
                            "value": "RETRY_TIMES",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 12,
                            "char": 43
                        },
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 12,
                        "char": 43
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 13,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "retryInterval",
                    "default": {
                        "type": "static-constant-access",
                        "left": {
                            "type": "variable",
                            "value": "self",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 13,
                            "char": 49
                        },
                        "right": {
                            "type": "variable",
                            "value": "RETRY_INTERVAL",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 13,
                            "char": 49
                        },
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 13,
                        "char": 49
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 15,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "name",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 16,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "connection",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 16,
                        "char": 30
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 17,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "connected",
                    "default": {
                        "type": "bool",
                        "value": "false",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 17,
                        "char": 30
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 19,
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
                            "name": "di",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\DI",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                "line": 19,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 19,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 19,
                            "char": 63
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "config",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 21,
                                    "char": 19
                                },
                                {
                                    "variable": "dbConfig",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 21,
                                    "char": 29
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 22,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "config",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "di",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 22,
                                            "char": 25
                                        },
                                        "name": "get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "config",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 22,
                                                    "char": 36
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 22,
                                                "char": 36
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 22,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 22,
                                    "char": 37
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 23,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "dbConfig",
                                    "expr": {
                                        "type": "property-dynamic-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "config",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 23,
                                            "char": 31
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 23,
                                            "char": 38
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 23,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 23,
                                    "char": 38
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 24,
                            "char": 11
                        },
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 24,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 24,
                                    "char": 26
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 26,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "name",
                                    "expr": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 26,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 26,
                                    "char": 30
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 27,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "dbConfig",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 27,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "retryTimes",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 27,
                                            "char": 38
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 27,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 27,
                                    "char": 40
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                "line": 27,
                                "char": 40
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "retryTimes",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "dbConfig",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 28,
                                                    "char": 45
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "retryTimes",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 28,
                                                    "char": 56
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 28,
                                                "char": 56
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 28,
                                            "char": 56
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 29,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 30,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "dbConfig",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 30,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "retryInterval",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 30,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 30,
                                        "char": 41
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 30,
                                    "char": 43
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                "line": 30,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "retryInterval",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "dbConfig",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 31,
                                                    "char": 48
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "retryInterval",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 31,
                                                    "char": 62
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 31,
                                                "char": 62
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 31,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 32,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 35,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "options",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "\\PDO",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 36,
                                                        "char": 43
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "MYSQL_ATTR_INIT_COMMAND",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 36,
                                                        "char": 43
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 36,
                                                    "char": 43
                                                },
                                                "value": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "SET NAMES ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 36,
                                                        "char": 56
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "dbConfig",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 36,
                                                            "char": 67
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "charset",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 36,
                                                            "char": 75
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 36,
                                                        "char": 75
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 36,
                                                    "char": 75
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 36,
                                                "char": 75
                                            },
                                            {
                                                "key": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "\\PDO",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 37,
                                                        "char": 32
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "ATTR_TIMEOUT",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 37,
                                                        "char": 32
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 37,
                                                    "char": 32
                                                },
                                                "value": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "dbConfig",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 37,
                                                        "char": 43
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "timeout",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 37,
                                                        "char": 51
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 37,
                                                    "char": 51
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 37,
                                                "char": 51
                                            },
                                            {
                                                "key": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "\\PDO",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 38,
                                                        "char": 32
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "ATTR_ERRMODE",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 38,
                                                        "char": 32
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 38,
                                                    "char": 32
                                                },
                                                "value": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "\\PDO",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 39,
                                                        "char": 9
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "ERRMODE_EXCEPTION",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 39,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 39,
                                                    "char": 9
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 39,
                                                "char": 9
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 39,
                                        "char": 10
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 39,
                                    "char": 10
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 40,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "dbConfig",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 40,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 40,
                                            "char": 35
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 40,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 40,
                                    "char": 37
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                "line": 40,
                                "char": 37
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "options",
                                            "expr": {
                                                "type": "add",
                                                "left": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "dbConfig",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 41,
                                                            "char": 42
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "options",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 41,
                                                            "char": 51
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 41,
                                                        "char": 51
                                                    },
                                                    "name": "toArray",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 41,
                                                    "char": 62
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 41,
                                                    "char": 71
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 41,
                                                "char": 71
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 41,
                                            "char": 71
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 42,
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
                                            "property": "options",
                                            "expr": {
                                                "type": "variable",
                                                "value": "options",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 43,
                                                "char": 40
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 43,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 44,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 46,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "descriptor",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "host",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 47,
                                                    "char": 18
                                                },
                                                "value": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "dbConfig",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 47,
                                                        "char": 29
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "host",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 47,
                                                        "char": 34
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 47,
                                                    "char": 34
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 47,
                                                "char": 34
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "port",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 48,
                                                    "char": 18
                                                },
                                                "value": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "dbConfig",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 48,
                                                        "char": 29
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "port",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 48,
                                                        "char": 34
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 48,
                                                    "char": 34
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 48,
                                                "char": 34
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "username",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 49,
                                                    "char": 22
                                                },
                                                "value": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "dbConfig",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 49,
                                                        "char": 33
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "username",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 49,
                                                        "char": 42
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 49,
                                                    "char": 42
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 49,
                                                "char": 42
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "password",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 50,
                                                    "char": 22
                                                },
                                                "value": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "dbConfig",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 50,
                                                        "char": 33
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "password",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 50,
                                                        "char": 42
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 50,
                                                    "char": 42
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 50,
                                                "char": 42
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "dbname",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 51,
                                                    "char": 20
                                                },
                                                "value": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "dbConfig",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 51,
                                                        "char": 31
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "dbname",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 51,
                                                        "char": 38
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 51,
                                                    "char": 38
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 51,
                                                "char": 38
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "options",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 52,
                                                    "char": 21
                                                },
                                                "value": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 52,
                                                        "char": 28
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "options",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 53,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 53,
                                                    "char": 9
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 53,
                                                "char": 9
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 53,
                                        "char": 10
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 53,
                                    "char": 10
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 54,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 19,
                    "last-line": 56,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getConnection",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "autoConnect",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                "line": 56,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 56,
                            "char": 61
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "tryTimes",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 58,
                                    "char": 21
                                },
                                {
                                    "variable": "e",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 58,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 59,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "tryTimes",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 59,
                                            "char": 29
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "retryTimes",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 59,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 59,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 59,
                                    "char": 40
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 61,
                            "char": 13
                        },
                        {
                            "type": "while",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 61,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "connected",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                        "line": 61,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 61,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                "line": 61,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "try-catch",
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "equals",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "autoConnect",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 63,
                                                    "char": 33
                                                },
                                                "right": {
                                                    "type": "bool",
                                                    "value": "true",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 63,
                                                    "char": 40
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 63,
                                                "char": 40
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "object-property",
                                                            "operator": "assign",
                                                            "variable": "this",
                                                            "property": "connection",
                                                            "expr": {
                                                                "type": "new",
                                                                "class": "\\Phalcon\\Db\\Adapter\\Pdo\\Mysql",
                                                                "dynamic": 0,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "property-access",
                                                                            "left": {
                                                                                "type": "variable",
                                                                                "value": "this",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 64,
                                                                                "char": 83
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "descriptor",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 64,
                                                                                "char": 94
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                            "line": 64,
                                                                            "char": 94
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                        "line": 64,
                                                                        "char": 94
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                "line": 64,
                                                                "char": 95
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 64,
                                                            "char": 95
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 65,
                                                    "char": 17
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
                                                            "property": "connection",
                                                            "expr": {
                                                                "type": "new",
                                                                "class": "\\PhalconPlus\\Db\\Pdo\\Mysql",
                                                                "dynamic": 0,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "property-access",
                                                                            "left": {
                                                                                "type": "variable",
                                                                                "value": "this",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 67,
                                                                                "char": 79
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "descriptor",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 67,
                                                                                "char": 90
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                            "line": 67,
                                                                            "char": 90
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                        "line": 67,
                                                                        "char": 90
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "autoConnect",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                            "line": 67,
                                                                            "char": 103
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                        "line": 67,
                                                                        "char": 103
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                "line": 67,
                                                                "char": 104
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 67,
                                                            "char": 104
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 68,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 69,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "connected",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "true",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 69,
                                                        "char": 43
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 69,
                                                    "char": 43
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 70,
                                            "char": 13
                                        }
                                    ],
                                    "catches": [
                                        {
                                            "classes": [
                                                {
                                                    "type": "variable",
                                                    "value": "\\Exception",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 70,
                                                    "char": 31
                                                }
                                            ],
                                            "variable": {
                                                "type": "variable",
                                                "value": "e",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                "line": 85,
                                                "char": 9
                                            },
                                            "statements": [
                                                {
                                                    "type": "fcall",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "error_log",
                                                        "call-type": 1,
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
                                                                                    "value": "PHP Fatal error:  PhalconPlus::Db::MySQL::connect() failed to connect to MySQL. Detail: ",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                    "line": 71,
                                                                                    "char": 116
                                                                                },
                                                                                "right": {
                                                                                    "type": "fcall",
                                                                                    "name": "json_encode",
                                                                                    "call-type": 1,
                                                                                    "parameters": [
                                                                                        {
                                                                                            "parameter": {
                                                                                                "type": "property-access",
                                                                                                "left": {
                                                                                                    "type": "variable",
                                                                                                    "value": "this",
                                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                    "line": 72,
                                                                                                    "char": 44
                                                                                                },
                                                                                                "right": {
                                                                                                    "type": "variable",
                                                                                                    "value": "descriptor",
                                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                    "line": 72,
                                                                                                    "char": 55
                                                                                                },
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                "line": 72,
                                                                                                "char": 55
                                                                                            },
                                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                            "line": 72,
                                                                                            "char": 55
                                                                                        }
                                                                                    ],
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                    "line": 72,
                                                                                    "char": 57
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 72,
                                                                                "char": 57
                                                                            },
                                                                            "right": {
                                                                                "type": "string",
                                                                                "value": ". We will try ",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 73,
                                                                                "char": 42
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                            "line": 73,
                                                                            "char": 42
                                                                        },
                                                                        "right": {
                                                                            "type": "fcall",
                                                                            "name": "strval",
                                                                            "call-type": 1,
                                                                            "parameters": [
                                                                                {
                                                                                    "parameter": {
                                                                                        "type": "variable",
                                                                                        "value": "tryTimes",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                        "line": 73,
                                                                                        "char": 59
                                                                                    },
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                    "line": 73,
                                                                                    "char": 59
                                                                                }
                                                                            ],
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                            "line": 73,
                                                                            "char": 61
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                        "line": 73,
                                                                        "char": 61
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": " times for you.",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                        "line": 73,
                                                                        "char": 78
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                    "line": 73,
                                                                    "char": 78
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                "line": 73,
                                                                "char": 78
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 73,
                                                        "char": 79
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 74,
                                                    "char": 19
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "tryTimes",
                                                            "expr": {
                                                                "type": "sub",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "tryTimes",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                    "line": 74,
                                                                    "char": 41
                                                                },
                                                                "right": {
                                                                    "type": "int",
                                                                    "value": "1",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                    "line": 74,
                                                                    "char": 44
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                "line": 74,
                                                                "char": 44
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 74,
                                                            "char": 44
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 75,
                                                    "char": 18
                                                },
                                                {
                                                    "type": "if",
                                                    "expr": {
                                                        "type": "greater",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "tryTimes",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 75,
                                                            "char": 29
                                                        },
                                                        "right": {
                                                            "type": "int",
                                                            "value": "0",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 75,
                                                            "char": 33
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                        "line": 75,
                                                        "char": 33
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "fcall",
                                                            "expr": {
                                                                "type": "fcall",
                                                                "name": "usleep",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "property-access",
                                                                            "left": {
                                                                                "type": "variable",
                                                                                "value": "this",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 77,
                                                                                "char": 33
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "retryInterval",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 77,
                                                                                "char": 47
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                            "line": 77,
                                                                            "char": 47
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                        "line": 77,
                                                                        "char": 47
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                "line": 77,
                                                                "char": 48
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 78,
                                                            "char": 29
                                                        },
                                                        {
                                                            "type": "fcall",
                                                            "expr": {
                                                                "type": "fcall",
                                                                "name": "error_log",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "concat",
                                                                            "left": {
                                                                                "type": "concat",
                                                                                "left": {
                                                                                    "type": "string",
                                                                                    "value": "PHP Notice:  PhalconPlus::Db::MySQL::connnect() retry to connect to MySQL for the ",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                    "line": 78,
                                                                                    "char": 113
                                                                                },
                                                                                "right": {
                                                                                    "type": "fcall",
                                                                                    "name": "strval",
                                                                                    "call-type": 1,
                                                                                    "parameters": [
                                                                                        {
                                                                                            "parameter": {
                                                                                                "type": "sub",
                                                                                                "left": {
                                                                                                    "type": "property-access",
                                                                                                    "left": {
                                                                                                        "type": "variable",
                                                                                                        "value": "this",
                                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                        "line": 78,
                                                                                                        "char": 126
                                                                                                    },
                                                                                                    "right": {
                                                                                                        "type": "variable",
                                                                                                        "value": "retryTimes",
                                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                        "line": 78,
                                                                                                        "char": 138
                                                                                                    },
                                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                    "line": 78,
                                                                                                    "char": 138
                                                                                                },
                                                                                                "right": {
                                                                                                    "type": "variable",
                                                                                                    "value": "tryTimes",
                                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                    "line": 78,
                                                                                                    "char": 148
                                                                                                },
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                "line": 78,
                                                                                                "char": 148
                                                                                            },
                                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                            "line": 78,
                                                                                            "char": 148
                                                                                        }
                                                                                    ],
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                    "line": 78,
                                                                                    "char": 149
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 78,
                                                                                "char": 149
                                                                            },
                                                                            "right": {
                                                                                "type": "string",
                                                                                "value": " time ... ",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 78,
                                                                                "char": 160
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                            "line": 78,
                                                                            "char": 160
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                        "line": 78,
                                                                        "char": 160
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                "line": 78,
                                                                "char": 161
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 79,
                                                            "char": 17
                                                        }
                                                    ],
                                                    "else_statements": [
                                                        {
                                                            "type": "fcall",
                                                            "expr": {
                                                                "type": "fcall",
                                                                "name": "error_log",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "concat",
                                                                            "left": {
                                                                                "type": "string",
                                                                                "value": "PHP Fatal error:  PhalconPlus::Db::MySQL::connect() finally failed to connect to MySQL. Detail: ",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 80,
                                                                                "char": 128
                                                                            },
                                                                            "right": {
                                                                                "type": "fcall",
                                                                                "name": "json_encode",
                                                                                "call-type": 1,
                                                                                "parameters": [
                                                                                    {
                                                                                        "parameter": {
                                                                                            "type": "property-access",
                                                                                            "left": {
                                                                                                "type": "variable",
                                                                                                "value": "this",
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                "line": 81,
                                                                                                "char": 48
                                                                                            },
                                                                                            "right": {
                                                                                                "type": "variable",
                                                                                                "value": "descriptor",
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                                "line": 81,
                                                                                                "char": 59
                                                                                            },
                                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                            "line": 81,
                                                                                            "char": 59
                                                                                        },
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                        "line": 81,
                                                                                        "char": 59
                                                                                    }
                                                                                ],
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                                "line": 81,
                                                                                "char": 60
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                            "line": 81,
                                                                            "char": 60
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                        "line": 81,
                                                                        "char": 60
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                "line": 81,
                                                                "char": 61
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 82,
                                                            "char": 25
                                                        },
                                                        {
                                                            "type": "throw",
                                                            "expr": {
                                                                "type": "variable",
                                                                "value": "e",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                                "line": 82,
                                                                "char": 28
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                            "line": 83,
                                                            "char": 17
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                                    "line": 84,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                            "line": 85,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 85,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 86,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 86,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "connection",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 86,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                "line": 86,
                                "char": 32
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                            "line": 87,
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
                                    "value": "\\Phalcon\\Db\\Adapter\\Pdo\\Mysql",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                    "line": 57,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                                "line": 57,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 57,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 56,
                    "last-line": 88,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "RETRY_TIMES",
                    "default": {
                        "type": "int",
                        "value": "5",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 5,
                        "char": 26
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 6,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "RETRY_INTERVAL",
                    "default": {
                        "type": "int",
                        "value": "100000",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                        "line": 6,
                        "char": 34
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
                    "line": 8,
                    "char": 11
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/Mysql.zep",
        "line": 3,
        "char": 5
    }
]