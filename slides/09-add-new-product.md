#### Step 9 - Scenario to add a new product

A) Create another scenario in `product_admin.feature` for
creating a new product:

If I start on "/admin/products", click the link to add a
new, fill out the name, price and body fields and press Save,
I should see a "Product created FTW" message.

**TIP**: The "add new product" link doesn't have any text! So
use its `id` attribute: `When I click "new-product-link"`


B) Re-run behat `php bin/behat`

**GOAL**

And *this* new scenario should pass too!
