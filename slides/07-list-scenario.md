#### Step 7 - Product Admin List Scenario
Stuck? http://bit.ly/summer-behat-stuck

A) Add a new scenario for the following situation
beneath your feature definition in `product_admin.feature`:

If I start on the homepage and click the Admin link and then
the Products link, I should see the text "Showing All Products".

Use language from the definitions we already have!
`php bin/behat -dl`

B) Execute your scenario!

`php bin/behat features/product_admin.feature`

**GOAL**

If you did everything correctly, the test should pass!

**EXTRA CREDIT**

* Add another assertion (i.e. THEN) to check that you're
on the right URL.
