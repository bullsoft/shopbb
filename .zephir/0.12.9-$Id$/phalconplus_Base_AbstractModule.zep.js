[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Base",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
        "line": 4,
        "char": 8
    },
    {
        "type": "class",
        "name": "AbstractModule",
        "abstract": 1,
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
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                        "line": 7,
                        "char": 24
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                    "line": 10,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "def",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                        "line": 10,
                        "char": 25
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
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
                            "name": "di",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\DI",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                "line": 12,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                            "line": 12,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "def",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\PhalconPlus\\Base\\ModuleDef",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                "line": 12,
                                "char": 83
                            },
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                "line": 12,
                                "char": 91
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                            "line": 12,
                            "char": 91
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                        "line": 14,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 14,
                                    "char": 26
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                            "line": 15,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "def",
                                    "expr": {
                                        "type": "variable",
                                        "value": "def",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                        "line": 15,
                                        "char": 28
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 15,
                                    "char": 28
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                            "line": 16,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                    "line": 12,
                    "last-line": 18,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getDef",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 20,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "def",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 20,
                                    "char": 25
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                "line": 20,
                                "char": 25
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                            "line": 21,
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
                                    "value": "\\PhalconPlus\\Base\\ModuleDef",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 19,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                "line": 19,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                        "line": 19,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                    "line": 18,
                    "last-line": 23,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getDi",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 25,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "di",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 25,
                                    "char": 24
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                "line": 25,
                                "char": 24
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                            "line": 26,
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
                                    "value": "\\Phalcon\\Di",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 24,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                "line": 24,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                        "line": 24,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                    "line": 23,
                    "last-line": 28,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isPrimary",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                            "line": 30,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "def",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                            "line": 30,
                                            "char": 26
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                        "line": 30,
                                        "char": 26
                                    },
                                    "name": "getIsPrimary",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 30,
                                    "char": 43
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 30,
                                    "char": 49
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                "line": 30,
                                "char": 49
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                            "line": 31,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                    "line": 28,
                    "last-line": 33,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getBootstrap",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                        "line": 35,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "def",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                        "line": 35,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                    "line": 35,
                                    "char": 26
                                },
                                "name": "getBootstrap",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                                "line": 35,
                                "char": 41
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                            "line": 36,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                    "line": 33,
                    "last-line": 38,
                    "char": 19
                },
                {
                    "visibility": [
                        "abstract",
                        "public"
                    ],
                    "type": "method",
                    "name": "registerAutoloaders",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                    "line": 38,
                    "last-line": 39,
                    "char": 28
                },
                {
                    "visibility": [
                        "abstract",
                        "public"
                    ],
                    "type": "method",
                    "name": "registerServices",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
                    "line": 39,
                    "last-line": 40,
                    "char": 28
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
            "line": 4,
            "char": 14
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/AbstractModule.zep",
        "line": 4,
        "char": 14
    }
]