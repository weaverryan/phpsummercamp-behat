<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Behat context class.
 */
class FeatureContext implements SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context object.
     * You can also pass arbitrary arguments to the context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have a file named :file
     */
    public function iHaveAFileNamed($file)
    {
        throw new PendingException();
    }

    /**
     * @When I run :command
     */
    public function iRun($command)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see :text in the output
     */
    public function iShouldSeeInTheOutput($text)
    {
        throw new PendingException();
    }
}
