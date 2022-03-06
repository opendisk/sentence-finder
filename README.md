## Sentence Finder
Find sentence from given word/phrase

## Installation
Install using composer:

```bash
composer require opendisk/sentence-finder
```

### Usage Example
```php
use Opendisk\SentenceFinder\GetSentence;

// $sentences will contains array of sentences
$finder = new SentenceFinder;
$sentences = $finder->findSentence('word');
```

### License
MIT
