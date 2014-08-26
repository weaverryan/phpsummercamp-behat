#### Step 12 - Background to Login
Stuck? http://bit.ly/summer-behat-stuck

A) Add a `Background` section above the scenarios in
`product_admin.feature` that enter the username, password
and click "Login".
    
Username: `admin`
Password: `admin`

B) Re-run Behat! (It should pass)    

C) Remove the "And print last response"

**GOAL**

Each scenario will once again pass, since we're logging in before each.
