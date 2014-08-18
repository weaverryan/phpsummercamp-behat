Feature: Product admin
  In order to manage the content on my site
  As an admin
  I need to be able to add, edit and delete products

  Scenario: Seeing a list of existing products
    Given I am on "/"
    When I click "Admin"
    And I click "Products"
    Then I should see "Showing All Products"
