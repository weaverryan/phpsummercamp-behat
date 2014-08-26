#### Step 3 - Rename arguments

A) In `FeatureContext`, change the annotations and arguments
for each method to be friendlier!

Example:

Before:

    /**
     * @Given I have a file named :arg1
     */
    public function iHaveAFileNamed($arg1)

After:

    /**
     * @Given I have a file named :file
     */
    public function iHaveAFileNamed($file)

**GOAL**

Nothing is different - but things are a little prettier :)

**EXTRA CREDIT**

* Add the missing `use` statement for `PendingException`
and re-run Behat to see that it shows 1 "pending" scenario
