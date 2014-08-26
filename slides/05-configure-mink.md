#### Step 5 - Tell Behat about MinkExtension
Stuck? http://bit.ly/summer-behat-stuck

A) List all of your built-in "definitions"
`php bin/behat -dl`

B) Copy `resources/behat.yml` to the root of your project

C) Make `FeatureContext` extend `MinkContext`

D) List your built-in "definitions" again!
`php bin/behat -dl`

**GOAL**

You should see *a lot* more built-in definitions: tools
we can use to write scenarios!

**EXTRA CREDIT**

* Find out where these built-in definitions come from by
opening up the `MinkContext` class. 
