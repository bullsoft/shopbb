[
    {
        "type": "namespace",
        "name": "PhalconPlus\\FeatureTest",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "SplObjectStorageTest",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "objects",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
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
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "objects",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\SplObjectStorage",
                                        "dynamic": 0,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 9,
                                        "char": 52
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 9,
                                    "char": 52
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                            "line": 10,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                    "line": 7,
                    "last-line": 12,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "insert",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                            "line": 12,
                            "char": 36
                        },
                        {
                            "type": "parameter",
                            "name": "obj",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\stdClass",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                "line": 12,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                            "line": 12,
                            "char": 53
                        },
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                "line": 12,
                                "char": 70
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                            "line": 12,
                            "char": 70
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 14,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "objects",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 14,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 14,
                                    "char": 23
                                },
                                "name": "detach",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "obj",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                            "line": 14,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 14,
                                        "char": 34
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                "line": 14,
                                "char": 35
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                            "line": 15,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 15,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "objects",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 15,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 15,
                                    "char": 23
                                },
                                "name": "attach",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "obj",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                            "line": 15,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 15,
                                        "char": 34
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "key": {
                                                        "type": "string",
                                                        "value": "name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 16,
                                                        "char": 18
                                                    },
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 16,
                                                        "char": 24
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                    "line": 16,
                                                    "char": 24
                                                },
                                                {
                                                    "key": {
                                                        "type": "string",
                                                        "value": "method",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 17,
                                                        "char": 20
                                                    },
                                                    "value": {
                                                        "type": "string",
                                                        "value": "insert",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 17,
                                                        "char": 28
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                    "line": 17,
                                                    "char": 28
                                                },
                                                {
                                                    "key": {
                                                        "type": "string",
                                                        "value": "initial_data",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 18,
                                                        "char": 25
                                                    },
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "data",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 19,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                    "line": 19,
                                                    "char": 9
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                            "line": 19,
                                            "char": 10
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 19,
                                        "char": 10
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                "line": 19,
                                "char": 11
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                            "line": 20,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                    "line": 12,
                    "last-line": 22,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "exec",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "obj",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 24,
                                    "char": 16
                                },
                                {
                                    "variable": "info",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 24,
                                    "char": 22
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                            "line": 25,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 25,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "objects",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 25,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 25,
                                    "char": 23
                                },
                                "name": "rewind",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                "line": 25,
                                "char": 32
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                            "line": 26,
                            "char": 13
                        },
                        {
                            "type": "while",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 26,
                                        "char": 20
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "objects",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 26,
                                        "char": 29
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 26,
                                    "char": 29
                                },
                                "name": "valid",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                "line": 26,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "obj",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 27,
                                                        "char": 28
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "objects",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 27,
                                                        "char": 37
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                    "line": 27,
                                                    "char": 37
                                                },
                                                "name": "current",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                "line": 27,
                                                "char": 47
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                            "line": 27,
                                            "char": 47
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 28,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "info",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 28,
                                                        "char": 29
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "objects",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 28,
                                                        "char": 38
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                    "line": 28,
                                                    "char": 38
                                                },
                                                "name": "getInfo",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                "line": 28,
                                                "char": 48
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                            "line": 28,
                                            "char": 48
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 29,
                                    "char": 16
                                },
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "string",
                                                                    "value": "Key: ",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                    "line": 29,
                                                                    "char": 24
                                                                },
                                                                "right": {
                                                                    "type": "mcall",
                                                                    "variable": {
                                                                        "type": "property-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "this",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                            "line": 29,
                                                                            "char": 31
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "objects",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                            "line": 29,
                                                                            "char": 40
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                        "line": 29,
                                                                        "char": 40
                                                                    },
                                                                    "name": "key",
                                                                    "call-type": 1,
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                    "line": 29,
                                                                    "char": 47
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                "line": 29,
                                                                "char": 47
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": " Name: ",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                "line": 29,
                                                                "char": 57
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                            "line": 29,
                                                            "char": 57
                                                        },
                                                        "right": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "info",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                "line": 29,
                                                                "char": 63
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "name",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                "line": 29,
                                                                "char": 68
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                            "line": 29,
                                                            "char": 70
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 29,
                                                        "char": 70
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": " Obj: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                        "line": 29,
                                                        "char": 79
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                    "line": 29,
                                                    "char": 79
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "get_class",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "obj",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                                "line": 29,
                                                                "char": 94
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                            "line": 29,
                                                            "char": 94
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                    "line": 29,
                                                    "char": 96
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                "line": 29,
                                                "char": 96
                                            },
                                            "right": {
                                                "type": "constant",
                                                "value": "PHP_EOL",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                "line": 29,
                                                "char": 105
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                            "line": 29,
                                            "char": 105
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 30,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                "line": 30,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "objects",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                                "line": 30,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                            "line": 30,
                                            "char": 27
                                        },
                                        "name": "next",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                        "line": 30,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                                    "line": 31,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                            "line": 32,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
                    "line": 22,
                    "last-line": 33,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/FeatureTest\/SplObjectStorageTest.zep",
        "line": 3,
        "char": 5
    }
]