[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Logger\\Processor",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Uid",
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
                    "name": "uid",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
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
                            "name": "len",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "int",
                                "value": "18",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                "line": 7,
                                "char": 45
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                            "line": 7,
                            "char": 45
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "greater",
                                    "left": {
                                        "type": "fcall",
                                        "name": "strlen",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "len",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                    "line": 9,
                                                    "char": 23
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                "line": 9,
                                                "char": 23
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                        "line": 9,
                                        "char": 25
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "2",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                        "line": 9,
                                        "char": 28
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                    "line": 9,
                                    "char": 28
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                "line": 9,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "uid",
                                            "expr": {
                                                "type": "variable",
                                                "value": "len",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                "line": 10,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                            "line": 10,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                    "line": 11,
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
                                            "property": "uid",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "substr",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "hash",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "md5",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                                        "line": 12,
                                                                        "char": 44
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                                    "line": 12,
                                                                    "char": 44
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "fcall",
                                                                        "name": "uniqid",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "string",
                                                                                    "value": "",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                                                    "line": 12,
                                                                                    "char": 53
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                                                "line": 12,
                                                                                "char": 53
                                                                            },
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "bool",
                                                                                    "value": "true",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                                                    "line": 12,
                                                                                    "char": 59
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                                                "line": 12,
                                                                                "char": 59
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                                        "line": 12,
                                                                        "char": 60
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                                    "line": 12,
                                                                    "char": 60
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                            "line": 12,
                                                            "char": 61
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                        "line": 12,
                                                        "char": 61
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "0",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                            "line": 12,
                                                            "char": 64
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                        "line": 12,
                                                        "char": 64
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "len",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                            "line": 12,
                                                            "char": 69
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                        "line": 12,
                                                        "char": 69
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                                "line": 12,
                                                "char": 70
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                            "line": 12,
                                            "char": 70
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                    "line": 13,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                            "line": 14,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                    "line": 7,
                    "last-line": 16,
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
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                    "line": 18,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "uid",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                    "line": 18,
                                    "char": 25
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                                "line": 18,
                                "char": 25
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                            "line": 19,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
                    "line": 16,
                    "last-line": 20,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Logger\/Processor\/Uid.zep",
        "line": 3,
        "char": 5
    }
]