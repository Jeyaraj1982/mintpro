<?php include_once("header.php");?> 
<style>
.gTWxzD {

   
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;
    width: 100%;
    flex: 1 1 0%;

}
.gTWxzD .login-section {

    width: 100%;
    max-width: 360px;
    padding-top: 20px;
    padding-bottom: 16px;
    margin: auto;

}
.gTWxzD .login-section .logo {

    margin-bottom: 20px;
    text-align: center;
    position: relative;

}
.welcomeToMintpro {

    font-size: 16px;
    text-align: center;
    font-weight: normal;
    margin-bottom: 20px;
    line-height: 24px;
    color: rgb(117, 117, 117);

}
.gTWxzD .login-section .pageHeading {

    margin-bottom: 9px;
    text-align: center;
    font-size: 16px;
    color: rgb(97, 97, 97);
    line-height: 1.75;
    font-weight: 600;

}
.gTWxzD fieldset {

    margin-bottom: 10px;

}
.gTWxzD .login-section input {

    caret-color: rgb(133, 219, 186);
    border: 1px solid rgb(224, 224, 224);

}
.gTWxzD fieldset input + .country_code {

    position: absolute;
    left: 0px;
    top: 14px;
    margin: auto;
    width: 46px;
    height: 20px;
    text-align: right;
    color: rgb(66, 66, 66);
    line-height: 21px;
    font-weight: normal;
    font-size: 14px;

}
.gTWxzD .signupIllustrationBox {

    display: flex;
    flex-direction: column;
    -moz-box-align: center;
    align-items: center;                      
    -moz-box-pack: end;
    justify-content: flex-end;

}
.gTWxzD .IllustrationBox {

    display: flex;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: end;
    justify-content: flex-end;

}
.mintpro-wrapper {

    
    display: flex;
    flex-direction: column;
    -moz-box-align: stretch;
    align-items: stretch;
    -moz-box-pack: center;
    justify-content: center;
    flex: 1 1 0%;
    position: relative;

}
.mintproContainer {

    width: 100%;
    flex: 1 1 0%;
    display: flex;
    flex-direction: column;
    align-self: center;
    overflow-y: auto;

}
*, ::before, ::after {

    background-repeat: no-repeat;
    box-sizing: inherit;

}
.gTWxzD .login-section .submitBtn {

    width: 100%;
    font-size: 15px;
    line-height: 15px;
    height: 46px !important;
    margin-bottom: 7.5px;
    background: #00a465;
    color: white;

}

.errorstring{
    color:red;
}


</style>
        <div class="page-title">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 page-title-container">
                        <div class="breadcrumb-trail breadcrumbs"> <span class="trail-browse"></span> <span class="trail-begin"><a href="https://www.mintpro.in" title="Mintpro">Home</a></span> <span class="sep">&gt;</span> <span class="trail-end">How to become an Insurance agent</span></div>
                        <h1>How to become an Insurance agent</h1></div>
                </div>
            </div>
        </div>
        <div id="content" class="page-wrap sidebar-right">
            <div class="container content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div id="primary" class="content-area sidebar-right">
                            <main id="main" class="post-wrap" role="main">
                                <article id="post-4874" class="post-4874 page type-page status-publish hentry">
                                    <div style="height:406px;width:500px;margin-left: 334px;">
                                    <div class="mintpro-wrapper">
    <div id="form-post"></div>
    <script>
   
   function SubmitSignup() {
                         $('#ErrName').html("");
                         $('#ErrName').html("");
                         $('#ErrName').html("");
                        
                         
                         ErrorCount=0;
                        if (IsNonEmpty("Name","ErrName","Please Enter Name")) {
                        IsAlphabet("Name","ErrName","Please Enter Alphabet characters only");
                        }
                        
                        if (IsNonEmpty("Email","ErrEmail","Please Enter Email ID")) {
                            IsEmail("Email","ErrEmail","Please Enter Valid Email");    
                        }
                        
                        if (IsNonEmpty("Password","ErrPassword","Please Enter Password")) {
                        IsAlphaNumeric("Password","ErrPassword","Alpha Numeric Characters only");
                        }
                        alert(ErrorCount);
                        if (ErrorCount==0) {
                             $('#signupform').submit();
                            //return true;
                        } else{
                            return false;
                        }
                 }
    
</script>

    <form action="" method="post" id="signupform">
    <div class="mintproContainer">
        <div class="style__LoginWrapper-sc-10uxzqn-0 gTWxzD">
            <div class="login-section">
                <h3 class="pageHeading">Create an Account </h3> <br>
                <div>
                <fieldset>
                    <input type="text" class="inputbox" placeholder="Name" id="Name" name="Name" value="">
                    <span class="errorstring" id="ErrName"><?php echo isset($ErrName)? $ErrName : "";?></span>
                </fieldset>
                <fieldset>
                    <input type="text" class="inputbox" placeholder="Email Address" id="Email" name="Email" value="">
                    <span class="errorstring" id="ErrEmail"><?php echo isset($ErrEmail)? $ErrEmail : "";?></span>
                </fieldset>
                <fieldset>
                    <input type="password" class="inputbox" placeholder="Password" id="Password" name="Password" value="">
                    <span class="errorstring" id="ErrPassword"><?php echo isset($ErrPassword)? $ErrPassword : "";?></span>
                </fieldset>
                </div>
                
                <button class="submitBtn" onclick="primaryproduct('2222');" type="button">Create Account</button>          <br><br>
                <p class="signinhere" style="text-align: center;">Already have an Account? <a href="sign-in">Signin</a></p>
            </div>
        </div>
    </div>
    </form>
    <div id="loaderDiv" class="loader style__LoaderContainer-sc-148vpl8-0 kWopif"><span class="loader loader-quart"> </span></div>
</div>
                                    </div>
                                    <footer class="entry-footer"></footer>
                                </article>
                            </main>
                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once("footer.php");?>