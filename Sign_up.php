<?php
require_once("Files/header.php");
?>
   <div class="container py-4 py-lg-5 my-4">
        <div class="row">
          <div class="col-md-6">
            <div class="card border-0 shadow">
              <div class="card-body">
                <h2 class="h4 mb-1">Sign in</h2>
                <div class="py-3">
                  <h3 class="d-inline-block align-middle fs-base fw-medium mb-2 me-2">With social account:</h3>
                  <div class="d-inline-block align-middle"><a class="btn-social bs-google me-2 mb-2" href="#" data-bs-toggle="tooltip" title="Sign in with Google"><i class="ci-google"></i></a><a class="btn-social bs-facebook me-2 mb-2" href="#" data-bs-toggle="tooltip" title="Sign in with Facebook"><i class="ci-facebook"></i></a><a class="btn-social bs-twitter me-2 mb-2" href="#" data-bs-toggle="tooltip" title="Sign in with Twitter"><i class="ci-twitter"></i></a></div>
                </div>
                <hr>
                <h3 class="fs-base pt-4 pb-2">Or using form below</h3>
                <form method="post" action="sign_in.php" class="needs-validation" novalidate>
                  <div class="input-group mb-3"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <input class="form-control rounded-start" name="email_2" type="email" placeholder="Email" required>
                  </div>
                  <div class="input-group mb-3"><i class="ci-locked position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <div class="password-toggle w-100">
                      <input class="form-control" name="password_2" type="password" placeholder="Password" required>
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                      </label>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" checked id="remember_me">
                      <label class="form-check-label" for="remember_me">Remember me</label>
                    </div><a class="nav-link-inline fs-sm" href="account-password-recovery.html">Forgot password?</a>
                  </div>
                  <hr class="mt-4">
                  <div class="text-end pt-4">
                    <button class="btn btn-primary" name="Sign_in" type="submit"><i class="ci-sign-in me-2 ms-n21"></i>Sign In</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6 pt-4 mt-3 mt-md-0">
            <h2 class="h4 mb-3">No account? Sign up</h2>
            <p class="fs-sm text-muted mb-4">Registration takes less than a minute but gives you full control over your orders.</p>
            <form method="post" action="register.php" class="needs-validation" novalidate>
              <div class="row gx-4 gy-3">
                <div class="col-sm-6">
                  <label class="form-label" for="reg-fn">First Name</label>
                  <input class="form-control" name="first_name" type="text" required id="reg-fn">
                  <div class="invalid-feedback">Please enter your first name!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-ln">Last Name</label>
                  <input class="form-control" name="last_name" type="text" required id="reg-ln">
                  <div class="invalid-feedback">Please enter your last name!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-email">E-mail Address</label>
                  <input class="form-control" name="email" type="email" required id="reg-email">
                  <div class="invalid-feedback">Please enter valid email address!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-phone">Phone Number</label>
                  <input class="form-control" name="phone" type="text" required id="reg-phone">
                  <div class="invalid-feedback">Please enter your phone number!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-password">Password</label>
                  <input class="form-control" name="password" type="password" required id="reg-password">
              
                  <div class="invalid-feedback">Please enter password!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-password-confirm">Confirm Password</label>
                  <input class="form-control" name="password_1" type="password" required id="reg-password-confirm">
                  <div class="invalid-feedback">Please reconfirm Passwords !</div>
                </div>
                <div class="col-12 text-end">
                  <button class="btn btn-primary" name="Signup" type="submit"><i class="ci-user me-2 ms-n1"></i>Sign Up</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>








<?php
require_once("Files/footer.php")
?>

<?php
/* PS C:\xampp\htdocs\E-COMERCE SHOP> phpcs --standard=MySource Sign_up.php     
>> 

FILE: C:\xampp\htdocs\E-COMERCE SHOP\Sign_up.php
--------------------------------------------------------------------------------
FOUND 7 ERRORS AND 7 WARNINGS AFFECTING 11 LINES
--------------------------------------------------------------------------------
  1 | ERROR   | [ ] Missing file doc comment
  1 | ERROR   | [x] End of line character is invalid; expected "\n" but found   
    |         |     "\r\n"
  2 | ERROR   | [x] "require_once" is a statement not a function; no
    |         |     parentheses are required
  2 | ERROR   | [x] String "Files/header.php" does not require double quotes;   
    |         |     use single quotes instead
 12 | WARNING | [ ] Line exceeds 120 characters; contains 473 characters
 17 | WARNING | [ ] Line exceeds 120 characters; contains 139 characters
 20 | WARNING | [ ] Line exceeds 120 characters; contains 141 characters
 24 | WARNING | [ ] Line exceeds 120 characters; contains 124 characters
 36 | WARNING | [ ] Line exceeds 120 characters; contains 135 characters
 44 | WARNING | [ ] Line exceeds 120 characters; contains 131 characters
 79 | WARNING | [ ] Line exceeds 120 characters; contains 128 characters
 95 | ERROR   | [x] "require_once" is a statement not a function; no
    |         |     parentheses are required
 95 | ERROR   | [x] String "Files/footer.php" does not require double quotes;
    |         |     use single quotes instead
 96 | ERROR   | [x] A closing tag is not permitted at the end of a PHP file
--------------------------------------------------------------------------------
PHPCBF CAN FIX THE 6 MARKED SNIFF VIOLATIONS AUTOMATICALLY
--------------------------------------------------------------------------------

Time: 441ms; Memory: 8MB */

/* PS C:\xampp\htdocs\E-COMERCE SHOP> phpcbf --standard=MySource Sign_up.php  
>>

PHPCBF RESULT SUMMARY
FILE                                                  FIXED  REMAINING
----------------------------------------------------------------------
C:\xampp\htdocs\E-COMERCE SHOP\Sign_up.php            6      8
----------------------------------------------------------------------
A TOTAL OF 6 ERRORS WERE FIXED IN 1 FILE
----------------------------------------------------------------------

Time: 392ms; Memory: 8MB */