<?php

return [
    'alipay' => [
        'app_id'         => '2016080700190073',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4miASfyfgdDLQTVHB+CDuGc4ezvebRUHBjqICteRFTFWaVal4IVZaFms0q5+8cHXaxCZfgUyC8CoUPpRSSVwVAm3NfbAiXjCxNX7I7nAdVf6/U7UjDyAv7mLMiRvSVYByd5e+gkdVbl2q0CTFeuA+5Q/WITPQrb7zjImZcuIh3eUVWNcRlV41V+LZfZW64R6/8NGBUGL6NDBGY2NCHGrtlIVAC8jSBGXnkFlA/UmUO60LvA3oNCGEu3KKKHh8y7fSFG6EL9dugs72a5jPKJNiUZetF0yTZZyOWZ7HoEA929kAP6sRdB3KMEbltO2ZcUAW75vkz31qoFCujSd2SS2zwIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAnvM5tLsiiVQyOb4Q8UnQW8Vo/N6P/+QNqfvB8K3kOGZn2efY09YZ34N8iVUmsh6wq42BaJZ7yrPpY9UDUFahYAaX8YYQv61IskAH5x9meeCZAWfqCvLdq531HvzrKjBc2XeQ7EuKvf11zLogumC7u+AS0YQ19M3Ze5V6kte/TRjvmH30xhtY4ML8br0K5ErlV/Ccpy6of9JihsjGF3IRf+mMmB9f4rCe/4j5E6edv5TX/gDQznq5FSOjeX+++qEPdZtuT+l8M2YSKZJYll/Cv5hPO1+M7mb05dtFrLQD+DSxi15kEkmo09Rd8/ZSCsaqkZvXilqtH7c767F1/QDCVwIDAQABAoIBAQCPSiSTUL/pnQVKGJWdbzVuBaCHlPurayMGQfaryZcbYPXt8pv9G91nKVlzVFf16sTJYl9usXoXWejkHntGSVJhBpCjIoCmysfmKOL278+pv1cvdUX/aMF8nIEE1mwJNF//i1ISMmd4rq0rSf+HBP04eN9+EPmzHn8YccB18Bh8nrUVB0FdCnA5vIt+ugKxflZr7D5lxamIPIFu+xyk1b4N9BQ/Js4HiLTJ3Ts4I+KfKNJItSKdb59T+ShMUpUu7cPlThz2E7qXJM8k+zVUpHe7Yr7ElJ2O7RLZbUTRcje/HETSqopuZpsFLO+F1PICn1YPZerm9LvdAF6NcnsofyMBAoGBAO9jHBmRWO4PsJy5vwbYm2COQlKyaXdB3N3EJ9LL6ttbwNDutZbDtcYVVtXlpCCyBL0WhlIQLEZs1A+kj9bJb8l81F+rfsLQjzHslv8BfVeMfdeJAVKZTA/120fa8o1M+JXWuTtb4103C6zmN4KC4K9nBGveLhD4/YGJdEKS4RtnAoGBAKn7F4HSS3WUUXnUg29Illo1pnqvqmZA8uB35/9krzykaOw/dtTy7SLPJgRxgo7SpwMm887F/goXuLtuEvJXqF6a7lt54U9Mlk1+fPyKr2hkdJY9SklK1TXRLrFRz9gkBkGz9GF9TVSb4gLirBeiuR8wS0B+YjCLRRmeGc4uJLuRAoGBAIphBFFTT9DtiO5QATj35Xl/Qp+DOqwRipc3WL3l2rFK7L7Z/mZUY7NJipTC1ol/3nVfm+28I5viNQOF4RAMCW6zliBnhjMfVGdLmE14kvgU4nnBXN5edzWSrVtwGV3M7LXRFepWR6wOsdUUj2oGNdOu/UNNf9uX0xMaXfZN6YppAoGBAJV/qWUcuBFpqV8lcZPmm5YrqYguCAh3ByY1T25n91e2ojFmf/U60yXSWvV9f/5td0Zmc/hgWtY1ltwCK9fJEORkD0+VGnzMN0VhAjx7HVsLPx8EONnNX0g9+nsqIUtQI9CVnVJBCkpn75fqFMGU9IxhxU2r2mAnnVaynq+gFd6BAoGAD5uqDe+1d6YgBfrx6GWI/GkAm1r2t6ernb17OGvhx9JMzFJe+K5KJqKGIm64b4mRHPRZTVMwiwOMNHF6k663Xls276uIwddGADw1+ck27a012FTgmT3Fla6ZEvRJQFdscBpbxKJj4PIi+qqusazadSsCF2x1ZPEnuXjHnPrWokU=',
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
