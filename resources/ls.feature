Feature: ls
  In order to see the directory structure
  As a UNIX user
  I need to be able to list the current directory's contents

  Scenario: List 2 files in a directory
    Given I have a file named "foo"
    And I have a file named "bar"
    When I run "ls"
    Then I should see "foo" in the output
    And I should see "bar" in the output
