## Release Procedure

This project is hosted through [packagist](https://packagist.org/). New versions of the project will automatically be fetched by packagist.

### Generating CAOS API classes and issuing release

The CAOS API classes should be generated at the time of release, with the exception that the master branch always holds version 1.5 of the CAOS API. On each new version of the CAOS API client, a tag chould be created for each of the CAOS API versions. Do *not* prefix with v like in `v1.4`.

1. Use the command `php classGenerator.php ${caosAPIversion}` to generate the CAOS API with the version indicated (e.g. `php classGenerator.php 1.4`)

In order to create a new version tag on the blessed repository, execute this command. The major and minor components of the version should correlate to the CAOS API version. For example, tagging the release with the version 1.3.4 would indicate that the release is using version 1.3 of the CAOS API.

2. Execute `vendor/bin/phing release -Dversion=X.Y.Z [-Dbranch="foo"]`