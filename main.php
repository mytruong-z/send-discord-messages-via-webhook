public function postToDiscord()
    {
        $webhookurl = "####";

        $timestamp = date("c", strtotime("now"));

        $json_data = json_encode([
            // Message
            "content" => "My Truong Test API Webhook ",

            // Username
            "username" => "mytruong",

            // Text-to-speech
            "tts" => false,

            // File upload
            // "file" => "",

            // Embeds Array
            "embeds" => [
                [
                    // Embed Title
                    "title" => "My Truong Test API Webhook",

                    // Embed Type
                    "type" => "rich",

                    // Embed Description
                    "description" => "description",

                    // URL of title link
                    "url" => "https://gist.github.com/mytruong-z",

                    // Timestamp of embed must be formatted as ISO8601
                    "timestamp" => $timestamp,

                    // Embed left border color in HEX
                    "color" => hexdec( "3366ff" ),

                    // Author
                    "author" => [
                        "name" => "BoiGiaTrang",
                        "url" => "https://boigia.space/"
                    ],

                    // Additional Fields array
                    "fields" => [
                        // Field 1
                        [
                            "name"   => "Account",
                            "value"  => "Nongdan02",
                            "inline" => false
                        ],
                        // Field 1
                        [
                            "name"   => "Health",
                            "value"  => "1000",
                            "inline" => false
                        ],
                        // Field 2
                        [
                            "name"   => "SLP",
                            "value"  => "1000",
                            "inline" => false
                        ],
                        // Field 3
                        [
                            "name"   => "Level Pet",
                            "value"  => "20",
                            "inline" => true
                        ],
                        [
                            "name"   => "Rank",
                            "value"  => "1230",
                            "inline" => true
                        ]
                    ]
                ]
            ]

        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


        $ch = curl_init( $webhookurl );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec( $ch );
        curl_close( $ch );
        return $response;
    }
