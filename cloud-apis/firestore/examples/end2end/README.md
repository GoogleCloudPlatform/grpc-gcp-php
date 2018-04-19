# Firestore and PHP

Detailed documentation on setup, configuration and usage can be found in the [docs](doc/grpc-gcp-php.md).


## Run with Docker
To build the Docker image go to directory ```src``` and run
```
docker build -t rw/grpc-firestore:0.1.0-php .
```
Display the application usage by running
```
docker run -ti rw/grpc-firestore:0.1.0-php --help
```
For authentication a credentials file has to be generated in [https://console.cloud.google.com/apis/credentials] for the appropriate project, which has to be mounted into the container at runtime to file /cred.json :
```
docker run -ti `-v $PWD/my-credentials-file.json:/cred.json rw/grpc-firestore:0.1.0-php --help
```

As stated in the 'usage output', one has to provide projectid, databaseid and (for most calls) collectionid as options.

The '-ti' flag is mandatory, as it is a interactive program.

### Examples
Start Interactive mode
```
docker run -ti \
  -v <FULL_PATH_TO_JSON_CREDENTIALS_FILE>:/cred.json \
  rw/grpc-firestore:0.1.0-php \
  --interactive true \
  --databaseid "<DATABASE_ID>" \
  --projectid <PROJECT_ID> \
  --collectionid <COLLECTION_ID>
```

Get Document with DocumentId 'xyz'
```
docker run -ti \
  -v <FULL_PATH_TO_JSON_CREDENTIALS_FILE>:/cred.json \
  rw/grpc-firestore:0.1.0-php \
  --api GetDocument \
  -x xyz \
  --databaseid <DATABASE_ID> \
  --projectid <PROJECT_ID> \
  --collectionid <COLLECTION_ID>
```
