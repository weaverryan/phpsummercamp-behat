## Instructor Notes

Here's the high-level plan:

### Step 0

- Go through some quick slides about the philosophy of BDD.
- This would include showing the feature and scenario structures.

### Step 1

- behat --init

### Step 2

- Copy in the `ls.feature` file from `resources/ls.feature`.
- Run behat and copy in the blank methods.
- Rename the method arguments of the functions we just copied.
- Fill in these functions
    -> talk about the private $output property
    -> talk about how failures are exceptions

### Step 3

- Show 1-2 slides of Mink.

### Step 4

- Copy in `behat.yml` from `resources/behat.yml` to initialize `MinkExtension`.
- Extend `MinkContext`.
- Show every behat -dl.

### Step 5

- Write first feature (`product_admin.feature`).
- Write first simple scenario (just going to the product list page).
- We'll use all built-in steps, so test should pass without doing anything.

### Step 6

- Change `When I follow` in scenario to `When I click`.
- Run behat and copy in the new method.
- Use the `MinkContext::clickLink` method to do this.

### Step 7

- Create a second scenario to create a new product.
- For the "New Product" link, incorrectly use the link's id, since
    it has no text.

### Step 8

- Add a new custom step to replace the "id" above. Use Mink's Page
    object to find the link via CSS and click it.

EXPERT:
- Add a new step to the first scenario and implement it:
    Then I should see 3 rows in the table.

### Step 9

- Remove the: `When I press "Save"` from the second scenario so things break.
- Show off the: And print last response for debugging.

### Step 10

- Uncomment an access control in `app/bootstrap.php` that makes the whole
    site require login.
- Add a Background that logs the user in.

### Step 11

- Click the "Empty Database" link and see that the test fails now that the
  admin user doesn't exist.
- Copy in `resources/AppContext.php`.
- Configure `behat.yml` to see the Context.
- Add a step in the background to add the admin user to the database.

### Step 12

- Add a `@BeforeScenario` in `AppContext` to clear user and product tables
  before every scenario.


TODO: Add something with JavaScript - see #5
