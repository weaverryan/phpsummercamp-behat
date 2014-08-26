#### Step 4 - Fill in those functions!
Stuck? http://bit.ly/summer-behat-stuck

A) Make the `iHaveAFileNamed` do what it says!

    public function iHaveAFileNamed($file)
    {
        touch($file);
    }


B) Make `iRun` do what it says. Create a new `$output` property
to hold the output:

    private $output;
    
    public function iRun($command)
    {
        $this->output = shell_exec($command);
    }

C) Make `iShouldSeeInTheOutput` check the output and throw
an exception if it does not see what it expects:

    public function iShouldSeeInTheOutput($text)
    {
        if (strpos($this->output, $text) === false) {
            throw new \Exception('Could not find text '.$text);
        }
    }

D) Re-run behat! `php bin/behat`

**GOAL**

The tests should actually pass! You should see green!

**EXTRA CREDIT**

* Change your logic slightly (i.e. break it) so that the
test actually fails!

* Use the `@AfterScenario` hook to delete the files you created
