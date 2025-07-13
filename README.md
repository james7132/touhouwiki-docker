# touhouwiki-docker

A Docker implementation of the specific MediaWiki set up used for [Touhou
Wiki](https://www.touhouwiki.net).

## Local Configuration Testing

To launch a local instance, Docker and Docker Compose are required.

The `SecureSetting.template.php` should be populated with appropriate secrets and
then renamed to `SecureSettings.php` before anything can be run.

To launch a local instance, run the following command:

```
docker-compose up -d
```

The test instance of the wiki is accessible at `localhost:8080`.

For more complete end-to-end testing, a database dump from the production
instance
