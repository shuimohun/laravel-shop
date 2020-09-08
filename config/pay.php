<?php

return [
    'alipay' => [
        'app_id'         => '2016080700190073',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4miASfyfgdDLQTVHB+CDuGc4ezvebRUHBjqICteRFTFWaVal4IVZaFms0q5+8cHXaxCZfgUyC8CoUPpRSSVwVAm3NfbAiXjCxNX7I7nAdVf6/U7UjDyAv7mLMiRvSVYByd5e+gkdVbl2q0CTFeuA+5Q/WITPQrb7zjImZcuIh3eUVWNcRlV41V+LZfZW64R6/8NGBUGL6NDBGY2NCHGrtlIVAC8jSBGXnkFlA/UmUO60LvA3oNCGEu3KKKHh8y7fSFG6EL9dugs72a5jPKJNiUZetF0yTZZyOWZ7HoEA929kAP6sRdB3KMEbltO2ZcUAW75vkz31qoFCujSd2SS2zwIDAQAB',
        'private_key'    => 'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCMn45Oqsq6XsRulCVw7/J0SLVAG12m2WJNnvbDEkPFFCbt4n2domVv61Gx3EgDzuB1Fgm9ByqdU7LAmOaJaMfChZ1J7boqUQF+004u8+4i8UY06nXu72uS43IymmMb97j3+xUfJG12cisJmGPrrX19Cpqt+GZj331288Jo8nEeDq57b4F90cydSUJZSzR9aZ1Z42CwbjTMivUO3j2d9nbkcyV6hah9GztT4JAexkH4yEsrWusqdp8dRO24iDIgy5D4y6aF3nWcM+Nv8nHbmnH8aeuYLIZloXILqRPqYfPLzKno6PdEqVU1rU6yCOFxFACmTw+/J/pMnkMAsU0FRapHAgMBAAECggEAO33tKJ7c8YfSNq36QRNiUYvJEnwBXOsuyYPtBY4emavy5EUju6LOo1C82TBGT0Ygc6iFKjFz9+dHAnAtaAiqKkN4zaQDVI+8wDkJJJgSMTo953kht5oWuqf60im6sERXPqI8x1YT8T5PstmDvFtDcbkgw2UJfEs6uy5ZGykmbf5LiwkzD5CZkEhhtIcux81V2OSHlxl4lWLMb03+57FISeqj1CrbCpV/G+DkyHUDEC6yfLoR3/4Vqnzu4aD1vqvfr59O4nK9guQ9VMzrxaWk3pTPvgUZN1hT8g4TIQj4+txCn0N+yWiVgkgPAs/pVy9MbkusWQjwc83X7CBK7D4awQKBgQC/UcIxcH2Wc7ug3yHlxMD5odUNTW7YakssjrnTNQUbJbwOZzrXeDn9zqCxd4GgDMyRzv82YDMrgmfnHuNyLqwqaMhfNBJw13E31aWctEOZLyI3PvPbaWlRREoimzSis76y55b6tjbDk8SIiuuasauk4nP7dkAI+KkUzF0Lug8kNwKBgQC8KisyiSGHf65fMVvIWb2Cg6UQCwg6SW+c5n9l1UiYC5UTzKImyEShIlfjcTNHS8oPyfhCTDZJxfCkl/uoltQEdIHTBS7oHLMoDos+bO0VvS4plYsb6/kXGU5iwbkpsCti+5N8ifKR091seMhnPQwakFoak0biH4wb7EVqtYPCcQKBgDy8Mr7JLEVH5keSrksn4+8bjewUKd0wGT9C7AD9supEV2fnI4nlk9tb7i2Id7EcfxDGusRDU9s7IcsARkooQOWRsBJxEG2cJ0gHXfTaUR9fFCifpoB//TwcRsCnrtT75M0cshRTJh1+WoTSPSs1vfyxGwq4JmnyrpJ4sg0X+tiPAoGAE/c9gi0+24vWys8H+ChdjX2+hAdHpjeomjNzDTEmdMu109YA1rClZ5unS8D1Ofl2xVoe95nyoL1aHXzq/SaT9K0QIX4JTiPNdtCkQcl5FrduMIdnrVzKn4LV6HC53wyMbgJX0f0pOgQLGLlwOlQl9qOei/dYrCHA0i2t5/a+tmECgYAlNgR/mcOSbc9olL0/fsht1tp8OTDU6j9jjXzuPnY+sburPoitFK20At3bskrTVnW4/jmcNwt9tblYVh/BLJCrqovC3en2EXE8FkQjEp20phElyLesuZ8NqIg1aPUON2LQeExDOCERtCfO48sPw8TBWx0jFsKqlMYGSH1CFje6eQ==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
