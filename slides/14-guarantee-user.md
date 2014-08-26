#### Step 14: Guarantee the user

A) Click the "Empty Database" link on the site in your browser

B) Re-run the tests. They fail!

C) Add a line to the top of your `Background` to always add
a user to the database:

    Given the admin user exists in the database

D) Run-run Behat

**GOAL**

The tests should once again pass, even though there may or may
not be an admin user in the database before each scenario.

**EXTRA CREDIT**

* Add a new feature file (`login.feature`) and a new scenario that tests
that the "Logout" link works.
