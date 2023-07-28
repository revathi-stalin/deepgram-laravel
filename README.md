# Deepgram AI

Deepgram providing the speech-to-text and language understanding capabilities you need to make your data readable and actionable by humans…or machines. (https://developers.deepgram.com/docs).


## Example:
        curl \
          --request POST \
          --header 'Authorization: Token YOUR_DEEPGRAM_API_KEY' \
          --header 'Content-Type: application/json' \
          --data '{"url":"https://static.deepgram.com/examples/interview_speech-analytics.wav"}' \
          --url 'https://api.deepgram.com/v1/listen?model=whisper'

## Understanding the response

            {
          "metadata": {
            "transaction_key": "deprecated",
            "request_id": "6ba2879c...",
            "sha256": "6a7d98...",
            "created": "2023-04-12T20:33:53.620Z",
            "duration": 96.56319,
            "channels": 1,
            "models": [
              "e04910..."
            ],
            "model_info": {
              "e04910...": {
                "name": "medium-en-whisper",
                "version": "2022-09-21.4",
                "arch": "whisper"
              }
            }
          },
          "results": {
            "channels": [
              {
                "alternatives": [
                  {
                    "transcript": "another big problem in the speech analytics space when customers first bring the software on is that they are blown away by the fact that an engine can monitor hundreds of kpis ...",
                    "confidence": 0.98273027,
                    "words": [
                      {
                        "word": "another",
                        "start": 0.06,
                        "end": 0.56,
                        "confidence": 0.34510013
                      },
                      {
                        "word": "big",
                        "start": 0.84,
                        "end": 1.3399999,
                        "confidence": 0.9840386
                      },
                      {
                        "word": "problem",
                        "start": 1.54,
                        "end": 2.04,
                        "confidence": 0.9970716
                      },
                    ...
                    ]
                  }
                ]
              }
            ]
          }
        }


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Revathi Stalin](https://github.com/revathi-stalin)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
