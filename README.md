# About the package

This is a simple wrapper to Google Chat.
You can easily send text messages to the desired channel in case you have the webhook.

# Installation
You can install the package via composer:

```composer require zoparga/simple-google-chat```

Publish config file


```php artisan vendor:publish --provider="zoparga\SimpleGoogleChat\SimpleGoogleChatServiceProvider" --tag="config"```

ADD ```GOOGLE_CHAT_BASIC_ROOM``` to you .env file.
