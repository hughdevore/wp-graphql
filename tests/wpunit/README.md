# WPUnit Tests
These are tests utilizing the WP_UnitTestCase. They're really integration tests more than "unit" tests, as they
test functionality of any particular piece of code in context of running with
WordPress core (and potentially other plugins or theme code). 

There are helper functions/factories for creating dummy data and making assertions against that data, etc.

These tests help ensure that WPGraphQL works with WordPress as it should.

## Note: Integration Tests
Commonly "WordPress unit tests" (hence the `wpunit` default name of the suite) are not related to classical unit tests but to integration tests. The difference is that unit tests are supposed to test a class methods in complete isolation, while integration tests check how components work inside WordPress. That's why, to prepare WordPress for testing, you should enable `WPLoader` module into `wpunit.suite.yml`.  
The `WPLoader` module: it takes care of loading, installing and configuring a fresh WordPress installation before each test method runs.  
To handle the heavy lifting the module requires some information about the local WordPress installation: in the `codeception.yml` file configure it to match your local setup; with reference to the example above the module configuration might be:
