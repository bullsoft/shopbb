[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Base",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Service",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "di",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                        "line": 8,
                        "char": 24
                    },
                    "docblock": "**\n     * @var <\\Phalcon\\DI>\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                    "line": 10,
                    "char": 9
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "final",
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                "line": 10,
                                "char": 54
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                            "line": 10,
                            "char": 55
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
                                    "property": "di",
                                    "expr": {
                                        "type": "variable",
                                        "value": "di",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                        "line": 12,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                    "line": 12,
                                    "char": 26
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                            "line": 13,
                            "char": 16
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ob_start",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                "line": 13,
                                "char": 19
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                            "line": 14,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                    "line": 14,
                                    "char": 14
                                },
                                "name": "onConstruct",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                "line": 14,
                                "char": 28
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                            "line": 15,
                            "char": 20
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ob_end_clean",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                "line": 15,
                                "char": 23
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                            "line": 16,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                    "line": 10,
                    "last-line": 18,
                    "char": 25
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "onConstruct",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                    "line": 18,
                    "last-line": 20,
                    "char": 22
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "getDI",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                    "line": 22,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "di",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                    "line": 22,
                                    "char": 24
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                "line": 22,
                                "char": 24
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                            "line": 23,
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
                                    "value": "\\Phalcon\\DI",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                    "line": 21,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                "line": 21,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                        "line": 21,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                    "line": 20,
                    "last-line": 25,
                    "char": 22
                },
                {
                    "visibility": [
                        "protected"
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
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                            "line": 25,
                            "char": 41
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "property_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                            "line": 27,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                        "line": 27,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "key",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                            "line": 27,
                                            "char": 37
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                        "line": 27,
                                        "char": 37
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                "line": 27,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "property-dynamic-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                            "line": 28,
                                            "char": 25
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "key",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                            "line": 28,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                        "line": 28,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                    "line": 29,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                                "line": 30,
                                                "char": 25
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "di",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                                "line": 30,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                            "line": 30,
                                            "char": 29
                                        },
                                        "name": "get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                                    "line": 30,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                                "line": 30,
                                                "char": 37
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                        "line": 30,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                                    "line": 31,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                            "line": 32,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
                    "line": 25,
                    "last-line": 33,
                    "char": 22
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Service.zep",
        "line": 3,
        "char": 5
    }
]