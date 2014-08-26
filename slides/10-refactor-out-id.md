#### Step 10 - Refactor out the id!

A) Change the step in the scenario to *not* reference the id!

    When I click the plus icon

B) Run Behat and copy the new function into FeatureContext

C) Use Mink to find the element by CSS and then click it!

**GOAL**

The scenario should still pass, but now you're not referencing
the id attribute!
