# composer.json

Create a new project with composer.json inside loading EMIS API Client library.

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ISIEmergingMarkets/php-api-client.git"
    }
  ],
  "require": {
    "Emis/PhpApiClient": "dev-dev"
  }
}
```

Then update your dependencies:

```
composer update
```

# Autoload 

In your script, initialize the composer's autoloader:

```
require('vendor/autoload.php');
```

# Initialization and login/logout

As a minimum your script should login/logout to EMIS API:

```
use Emis\Http\Client;

$client = new Client();
$client->login('username', 'password');

$client->logout();
```

# Reusing sessions

It's much better if your script handles a permanent session rather than login/logout on each request. You should store
the generated by the login session token and then reuse it on next requests. Logout should not be performed in this case
as it will destroy the current session and you won't be able to reuse the token. Below you can find an example that stores
the current session in the filesystem:

```
$token = file_get_contents('token');
$client = new Client();

if (!$token) {
    $client->login('username', 'password');
    file_put_contents('token', $client->getToken());
} else {
    $client->setToken($token);
}
```

# Sending API Requests

API requests are made through a set of proxy classes you could find under Emis\News\Api\Proxy namespace. 
A simple example getting document titles for country code 'HU':

```
use Emis\News\Api\Proxy\Search;

...

$search = new Search($client);
$result = $search->query('HU');

foreach ($result->getDocuments() as $document) {
    echo $document->getTitle() . "\n";
}
```
