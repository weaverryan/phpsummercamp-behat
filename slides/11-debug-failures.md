#### Step 11 - Login and Debugging


A) Uncomment out line 66 in `app/bootstrap.php`:

    $app['security.access_rules'] = array(
        array('^/admin', 'ROLE_ADMIN'),
    );

B) Run Behat! `php bin/behat`. It fails!

C) Right before the failed step, see what is going wrong:

    And print last response

**GOAL**

Each scenario will fail because the site now requires login! The response
before the failure should be printed out so you can see that it is the
login page!
