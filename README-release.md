## Release Procedure

This project is hosted through [packagist](https://packagist.org/). New versions of the project will automatically be fetched by packagist.

### Generating CAOS API classes and issuing release

The CAOS API classes should be generated at the time of release, with the exception that the master branch always holds version 1.5 of the CAOS API. On each new version of the CAOS API client, a tag chould be created for each of the CAOS API versions. Do *not* prefix with v like in `v1.4`.

1. Use the command `php classGenerator.php ${caosAPIversion}` to generate the CAOS API with the version indicated (e.g. `php classGenerator.php 1.4`)
2. Commit this change and push it to the blessed repository.
3. Execute `vendor/bin/phing release -Dversion=X.Y.Z [-Dbranch="foo"]`. The major and minor components of the version should correlate to the CAOS API version. For example, tagging the release with the version 1.3.4 would indicate that the release is using version 1.3 of the CAOS API.
4. Repeat steps 1-3 for each of the versions of the CAOS API (1.0-1.5).
5. Execute `php classGenerator 1.5`.
6. Commit and push this change to master so that the master branch has the most recent version of the CAOS API.