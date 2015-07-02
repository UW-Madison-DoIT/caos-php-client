## PHP Client for the CAOS API

### Developer prerequisites
* Git
* PHP

### Generating or Updating CAOS API classes 
Once the dependencies are pulled in with composer, generating and updating the CAOS API classes can be done simply with:
``` php
	php classGenerator.php
```

### Contributing
This project uses a Fork and Pull collaboration workflow. See http://git-scm.com/book/en/v2/Distributed-Git-Distributed-Workflows for more info

The primary repository for this project is https://bitucket.org/uwmadison_doit/caos-php-client. Few developers will have write access to this
repository (not even its creator :rage:), instead the preferred access will be read.

Each developer should:

1. Fork the primary repository into their personal bitbucket account.
2. Clone the fork to their workstation.
3. Create branches for each unit of work.
4. When done, push the branch up to their personal fork.
5. Submit a pull request from the branch in their personal fork to the primary repository.

This process allows us to make use of bitbucket's excellent code review tools and gives us the flexibility to pick and choose which features are ready for promotion at different times.

### Setting up your work environment
You will first need the composer executable on your workstation by running this command at the root project directory.

```bash
php -r "readfile('https://getcomposer.org/installer');" | php
```

Once you have the composer.phar in your root project directory, simply run

```bash
php composer.phar install
```

This will install the wsdl2phpgenerator used to generate the CAOS API classes and will also install phing.

#### Dependencies
The dependencies are locked at a known state in composer.lock to ensure stability. In order to manually update them, execute:
```bash
php phing.php composer-update
```


