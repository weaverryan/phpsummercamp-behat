Feature: Product admin
  In order to manage the content on my site
  As an admin
  I need to be able to add, edit and delete products

  Background:
    Given I am on "/login"
    And I fill in "Username" with "admin"
    And I fill in "Password" with "admin"
    And I press "Login"

  Scenario: Seeing a list of existing products
    Given I am on "/"
    When I click "Admin"
    And I click "Products"
    Then I should see "Showing All Products"

  Scenario: Add a new product
    Given I am on "/admin/products"
    When I click the plus icon
    And I fill in "Name" with "New prod"
    And I fill in "Price" with "9.99"
    And I fill in "Body" with "cool new product!"
    # And print last response
    And I press "Save"
    Then I should see "Product created FTW"
