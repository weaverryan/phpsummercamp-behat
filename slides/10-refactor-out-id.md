#### Step 10 - Refactor out the id!
Stuck? http://bit.ly/summer-behat-stuck

A) Change the step in the scenario to *not* reference the id!

    When I click the plus icon

B) Run Behat and copy the new function into FeatureContext

C) Use Mink to find the element by CSS and then click it!

**GOAL**

The scenario should still pass, but now you're not referencing
the id attribute!

**EXTRA CREDIT**

* Add an extra step at the end of the scenario:

    And the table should contain "New prod"

Create a new custom function that finds a `table` element via CSS
and then asserts that the text "New prod" is somewhere inside of it.

