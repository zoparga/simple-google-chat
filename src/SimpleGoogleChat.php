<?php

namespace zoparga\SimpleGoogleChat;

use Illuminate\Support\Facades\Http;

class SimpleGoogleChat
{
    public static function sendMessage($text, $chatRoom = 'basic' , $textType = 'text', $topLabel = 'Default')
    {
        $googleChatUrl = config('simplegooglechat.' . $chatRoom);
        $textMessage = [
            "text" => $text
        ];
        $cardMessage = [
            "cards" => [
                "sections" => [
                    [
                        "widgets" => [
                            [
                            "keyValue" => [
                                "topLabel" => $topLabel,
                                "content" => $text
                                ],
                            ],
                            // [
                            // "buttons" => [
                            //     [
                            //     "textButton" => [
                            //         "text" => "OPEN IN GOOGLE MAPS",
                            //         "onClick" => [
                            //         "openLink" => [
                            //             "url" => "https://picsum.photos/200"
                            //         ]
                            //         ]
                            //     ]
                            //     ]
                            // ]
                            // ]
                        ]
                    ]
                ]
            ]
        ];

        if($textType === 'text')
        {
            $sentMessage = $textMessage;
        } else {
            $sentMessage = $cardMessage;
        }

        try {
            $response = Http::post($googleChatUrl, $sentMessage);
        } catch (\Throwable $th) {
            info($th);
            throw $th;
        }
    }

}

