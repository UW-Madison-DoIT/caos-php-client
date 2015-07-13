## PHP Client for the CAOS API

### CAOS

CAOS stands for the [Curricular and Academic Operational Data Store](https://wiki.doit.wisc.edu/confluence/pages/viewpage.action?pageId=47562009). It is used to connect with the PeopleSoft database in order to retrieve various curricular and academic data concerning UW-Madison. Credentials for using CAOS are given on a service by service basis. If you wish to use this client, you must first request credentials on the site found above for your particular project.

CAOS documentation can be found [here](https://wiki.doit.wisc.edu/confluence/display/CHUB/CAOS+Documentation). Be aware that the docs found here are for the most recent version of CAOS. If you need to reference earlier docs click on the tab Previous Versions.

For more documentation see the section Documentation below.

### How to include caos-php-client

The version of the client is tied to the version of the CAOS API. Specifically, the major and minor version numbers align with the CAOS API. For example, version `1.5.x` corresponds to the client that uses version 1.5 of the CAOS API whereas version `1.3.x` corresponds to the client that uses version 1.3 of the CAOS API.

If you are using [composer](https://getcomposer.org/) to include your dependencies, you can use these instructions as guidelines.

Include `uwmadison_doit/caos-php-client` in your `composer.json` file under the section dependencies. Refer to the [composer.json guide](https://getcomposer.org/doc/04-schema.md) if you need help.

Composer will create a directory `/vendor` wherever you have placed your `composer.json` file. Under this directory you can find the source code for the client and also the `autoload.php` file.

Place this line at the beginning of the file and you are ready to use the client!

```
require 'path/to/vendor/autoload.php';
```

### How to issue requests with the client

All requests and responses are handled by the class ChubService which extends php's [SoapClient](http://php.net/manual/en/class.soapclient.php). To use SoapClient you must either configure php with the option `--enable-soap` or include `extension=php_soap.dll` in your `php.ini` file.

Issuing requests with the CAOS API follows this framework.

1.	Initialize the ChubService by declaring a new instantiation of the class.
2.	Create a request object concerning the particular data wanted.
3.	Issue the request using the ChubService's built-in methods.
4.	Repeat steps 2 and 3 to retrieve all the data desired.

Here is some example code for version 1.5 of the CAOS API.

``` php
// Code to request the present term
$ChubService = new \ChubService();
$request = new \GetPresentTermRequest($courseCareerCode);
$reponse = $ChubService->GetPresentTerm($request);
// Extract data from response
unlink($request, $response);

// Code to request a class (ChubService is already initialized so it need not be declared again)
$request = new \GetClassRequest($classID);
$response = $ChubService->GetClass($request);
// Extract data from response
unlink($request, $response);

// Code to request a list of advisors
$request = new \GetAdvisorsRequest($personQuery, $advisingDataOptions, $attributes);
$reponse = $ChubService->GetAdvisors($request);
// Extract data from response
unlink($request, $response);
```


### Documentation

The code used by the CAOS API client is auto generated from a wsdl file which has little documentation. It would be best to compare the description of methods and classes in the JavaDocs to the usage in the PHPDocs. The docs listed below are all specific to version 1.5 of the CAOS API. For earlier versions refer [here](https://wiki.doit.wisc.edu/confluence/display/CHUB/CAOS+Documentation) and click on the tab previous versions.

#### Request and Response Classes

From the example code above, it should be gleaned that all interactions with the CAOS service must be initiated through an instantiation of the class ChubService. A list of all the function names that can be called by ChubService can be found [here](https://wams.doit.wisc.edu/chub/chub-ws-api-1.5/apidocs/edu/wisc/services/chub/v1_5/CurricularDataService.html) in the JavaDocs and *link to phpdoc page* in the PHPDocs. The names of the functions are correct in the JavaDocs, however the parameters and return values are incorrect.

There are two major types of classes used when interacting with the CAOS API. 

1. A request class. This type of class wraps up the parameters needed by a ChubService method call. For example, when calling `$ChubService->GetClass()` instead of passing a unique class id, you would pass the object `\GetClassRequest` which contains the unique class id. Many request classes support multiple fields relevant to a query.

2. A response class. This type of class is returned by a ChubService method call. These classes are wrappers for data actually requested. For instance, a `\GetSubjectResponse` contains the property `$subject` which is the type `\subjectType`.

You can refer to the request and response classes [here](https://wams.doit.wisc.edu/chub/chub-soap-schema-1.5/apidocs/index.html) in the JavaDocs and also *link to phpdoc page*.

#### Curricular and Academic Data

Once you have retrieved your response using the ChubService methods, you only need to extract the data. The curricular and academic objects (like term, class, advisors, etc.) can be referred to [here for curricular](https://wams.doit.wisc.edu/chub/curricular-data-model-1.5/apidocs/) and [here for academic](https://wams.doit.wisc.edu/chub/academic-data-model-0.1/apidocs/index.html) in the JavaDocs and *links to phpdocs here*. Remember, usage will always follow the PHPDocs!

Links to php docs coming soon!