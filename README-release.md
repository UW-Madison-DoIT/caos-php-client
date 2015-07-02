## Release Procedure

This project is hosted through [packagist](https://packagist.org/). New versions of the project will automatically be fetched by packagist, so the only necessary step of the release is tagging the proper commit.

In order to create a new version tag on the blessed repository, execute this command
```bash
php phing.php release -Dversion=X.Y.Z [-Dbranch="foo"]
```