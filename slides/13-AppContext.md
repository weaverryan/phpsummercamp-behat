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
