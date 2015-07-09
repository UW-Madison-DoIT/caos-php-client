## PHP Client for the CAOS API

### CAOS

CAOS stands for the [Curricular and Academic Operational Data Store](https://wiki.doit.wisc.edu/confluence/pages/viewpage.action?pageId=47562009). It is used to connect with the PeopleSoft database in order to retrieve various curricular and academic data concerning UW-Madison. Credentials for using CAOS are given on a service by service basis. If you wish to use this client, you must first request credentials on the site found above for your particular project.

CAOS documentation can be found [here](https://wiki.doit.wisc.edu/confluence/display/CHUB/CAOS+Documentation). The particular classes that are used to communicate with CAOS are found under Reference Documentation. Be aware that the docs found here are for the most recent version of CAOS. If you need to reference earlier docs go [here](https://wiki.doit.wisc.edu/confluence/pages/viewpage.action?pageId=47562009) and click on the tab Previous Versions.

### How to include caos-php-client

If you are using composer to include your dependencies, place this line at the beginning of the file you need the client.

```
require 'path/to/vendor/autoload.php';
```

### How to issue requests with client

All requests and responses are handled by the class ChubService which extends php's [SoapClient](http://php.net/manual/en/class.soapclient.php). To use SoapClient you must either configure php with the option `--enable-soap` or include `extension=php_soap.dll` in your `php.ini` file.

Issuing requests with the CAOS API follows this framework.

1.	Initialize the ChubService by declaring a new instantiation of the class.
2.	Create a request object concerning the particular data wanted.
3.	Issue the request using the ChubService's built-in methods.
4.	Repeat steps 2 and 3 to retrieve all the data desired.

Here is some example code to retrieve the present term.

``` php
$ChubService = new ChubService();
$request = new GetPresentTermRequest($courseCareerCode);
$reponse = $ChubService->GetPresentTerm($request); 
```

For a complete list of the requests that can be issued by ChubService, see the the CAOS documentation and the functions listed under `caos-php-client/src/main/ChubService.php` wherever you have installed the client.

#### PHP Documentation

Link to php docs coming soon!