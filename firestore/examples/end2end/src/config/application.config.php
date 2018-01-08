<?php
namespace Application;

const CREDENTIALS_FILENAME = __DIR__.'/service_credentials.json';

$credentialsFilename = @getenv('GOOGLE_APPLICATION_CREDENTIALS');

if (!$credentialsFilename) {
    putenv('GOOGLE_APPLICATION_CREDENTIALS='.CREDENTIALS_FILENAME);
    $credentialsFilename = CREDENTIALS_FILENAME;
}

if(getenv('APPLICATION_ENV') != 'production') {
	// check if the file exists and if not give useful hints how to get it
    if(null == @json_decode(file_get_contents($credentialsFilename), true)) {
		throw new \Error(<<<'MARK'
The service credentials file is missing or incorrect.".
  1. Make sure that you have created a project via https://console.cloud.google.com/projectcreate
  2. Enable the firestore API: https://console.cloud.google.com/apis/library?project=rogue-wave-project&q=fire
  3. Create service account credentials from: https://console.cloud.google.com/apis/credentials?project=rogue-wave-project
	 More about service accounts can be read from here: https://support.google.com/cloud/answer/6158849?hl=en#serviceaccounts
  4. Save the file under the following directories in your application: config/service_credentials.json

Make sure also that you have accessed https://console.firebase.google.com/ and have added your project to firebase.
MARK
);
	}
}

$config = require __DIR__ . '/config.php';

if (defined('PROJECT_ID')) {
    $config['firestore']['projectId'] = PROJECT_ID;
}
if (defined('DATABASE_ID')) {
    $config['firestore']['database'] = DATABASE_ID;
}
if (defined('COLLECTION_ID')) {
    $config['firestore']['collectionId'] = COLLECTION_ID;
}
return $config;
