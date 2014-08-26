#### Step 15 - BeforeScenario to Clear Data
Stuck? http://bit.ly/summer-behat-stuck

A) Find the `clearData` in `AppContext.php` and add a `@BeforeScenario`
annotation above it:

    /**
     * @BeforeScenario
     */
    public function clearData()
    {
        // ... the code
    }

B) Re-run Behat!

**GOAL**

The scenarios still pass! This empties part of the database before
running each scenario.
