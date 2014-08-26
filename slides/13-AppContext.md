#### Step 13 - AppContext

A) Copy `resources/AppContext.php` into `features/bootstrap/`

B) Tell Behat about the new Context class by
editing the `behat.yml` file:

    default:
        extensions:
            # ... all the stuff you have now
        suites:
            default:
                contexts:
                    - FeatureContext
                    - AppContext

C) Run `php bin/behat -dl` to see some new built-in definitions

**GOAL**

When you list the built-in definitions (C), you should
see some new ones, like:
`the admin user exists in the database`

**EXTRA CREDIT**

* Add new `Given` to the first "list" scenario that guarantees that
there are 5 products in the database (`there are 5 products`)

* Add a new `And there are 5 products in the table` step at the end. Run
Behat, copy in the new function, then use Mink to find the table and make
sure there are 5 rows in it.
