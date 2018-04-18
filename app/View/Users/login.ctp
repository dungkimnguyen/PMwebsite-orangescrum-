<!--[if lt IE 10]>
<style type="text/css">
.lbl_ie{font-family: myriadpro-regular;font-size:18px;margin:0px 20px 5px;color:#636363;display:block}
.login_box{border:1px solid #ccc}
input#txt_Password{font-family: Arial}
</style>
<![endif]-->
<script>
    $(document).ready(function() {
        $('#txt_UserId').focus();
        var hashurl = getHash()
        parseUrlHash(hashurl)
	
	
	var visitortime = new Date();
	var visitortimezone = -visitortime.getTimezoneOffset()/60;
	$('#timezone_id').val(visitortimezone);
	
    });

    function loginDemo(email, pass) {
        $("#txt_UserId").val(email);
        $("#txt_Password").val(pass);
        $("#UserLoginForm").submit();
    }
    function getHash(window) {
        var match = (window || this).location.href.match(/#(.*)$/);
        return match ? match[1] : '';
    }

    function parseUrlHash(hash) {
        var urlVars = {};
        var params = (hash.substr(0)).split("/");
        if (params[1]) {
            $('#case_details').val(params[1]);
        }
    }
</script>
<div class="top_m_cont_land"  style=" background-color: #884bdf">
    <div class="wrapper_new">
        <div style="display:table-cell; height:100%; min-height:100%; vertical-align:middle">
            <div style="position:relative; z-index:9;">
                <div class="bg_logo_inner" style="top:-100px;left:-180px"></div>
                <div class="logo_landing" style="color:white; font-size:40px;">

                    <img src="<?php echo HTTP_ROOT; ?>img/images/logo_def1.png"  border="0" alt="COMPANY_NAME.com" title="COMPANY_NAME.com" width="80%"/>
<!--<h4>Welcome to COMPANY_NAME Community Edition v0.1</h4>-->
                </div>
                <div class="login_table" style="background-color:#884bdf">
                    <div style="height:100%;display:table; width:100%;">

                        <div id="container" style="display:table-cell; vertical-align:middle">
							
                            <div class="">
                                <div class="fl" style="right:0px; left:-8px;">
									
										<style>
										.cake-error {
											display:none;
										}
										</style>
										
								
                                    <div class="login_box">
                                        <h2 style="font-size:22px; color: #5b32b4; " class="signinCls">Login to your Account</h2>
                                       <h2 style="font-size:22px; display:none; color: #5b32b4;" class="signupCls">Quick Signup</h2>
                                       <div><img src="<?php echo HTTP_ROOT; ?>img/images/login_header_shadow.png?v=<?php echo RELEASE; ?>" width="460" height="8"/></div>
                                        
                                        <?php echo $this->Form->create('User', array('id'=>'userLoginForm','action' => "/login")); ?>
										<input type="hidden" name="data[User][timezone_id]" id="timezone_id" value="">
                                       
                                        <div class="login_dialog top_inc_app_land_from" id="login_dialog" style="margin-top:0px;">
                                            
											
										   <div class="gap10"></div>
                                           <div id="divide"></div>
                                          	
                                            <?php
                                            if($findCompany['Company']['id'] && USE_GOOGLE == 1) {
                                             ?>
                                                <div class="" style="text-align: center;">
													<div class="gogle_log_sup" onclick="loginWithGoogle();"><span class="gogle_log_sup_icn"></span>Login with Google</div>
													 <div class="gap10"></div>
													<div class="goog_log_or"><img src="<?php echo HTTP_IMAGES; ?>images/g_login_or.png?v=<?php echo RELEASE; ?>"/></div>
												</div>
                                            <?php
                                            }
                                            ?>
											
					   <div class="gap10"></div>
					   <div style="text-align:center;">
                                                <?php 
						    if(isset($update_email_message)){
							echo $update_email_message;
						     }else{
							echo $this->Session->flash(); 
						     }
						?>
                                            </div>

					<div style="display:none;" class="signupCls">
                                                 
                                        <?php echo $this->Form->text('company', array('size' => '30', 'class' => 'textbox', 'placeholder' => 'Company Name', 'title' => 'Company Name', 'id' => 'company','style' => 'background:#fff; padding-left:35px;background-image:url('.HTTP_ROOT.'img/building.png); background-repeat:no-repeat; background-position: left; ')); ?>
</div>
                                            </div>
                                          
                                            
                                            <label class="lbl_ie">Email ID</label>

                                           <?php echo $this->Form->text('email', array('size' => '30', 'class' => 'textbox email', 'placeholder' => 'Email ID', 'title' => 'Email ID', 'id' => 'email', 
'style' => 'background:#fff; padding-left:35px;background-image:url('.HTTP_ROOT.'img/email.png); background-repeat:no-repeat; background-position: left; ')); ?>

                                            <label class="lbl_ie">Password</label>
                                            <?php echo $this->Form->password('password', array('size' => '30', 'class' => 'textbox', 'placeholder' => 'Password', 'title' => 'Password', 'id' => 'password' ,'style' => 'background:#fff; padding-left:35px;background-image:url('.HTTP_ROOT.'img/key.png); background-repeat:no-repeat; background-position: left; ')); ?>
                                            <div class="gap10"></div>
                                            
                                          
                                            <div style="margin-left:20px; margin-top:4px;" class="signinCls">
                                                <input type="checkbox" name="data[User][remember_me]" id="chk_Rem" class="auto" value="1" style="cursor:pointer; border:none"/>
                                                <span class="rem_posn" style="color:#666;">Remember me</span>
   <div style=" float:right;" class="fl signinCls">
                                                <a href="<?php echo HTTP_ROOT; ?>users/forgotpassword" class="forgot_pwd" style="color: #5b32b4;">Forgot Password?</a></div>
                                            </div>
                                            <div class="gap10"></div>
                                            <div>
                                                <div style="margin-top:0px; margin-left:20px;" class="fl signinCls">
                                                    <input type="hidden" value="" name="case_details" id="case_details" />
                                                    <button type="submit" value="Save" name="submit_Pass" id="submit_Pass" class="btn submit-btn">Login</button> <!--Or &nbsp;-->

                                                <?php
                                                if (isset($_GET['project'])) {
                                                    ?>
                                                        <input type="hidden" name="data[User][project]" value="<?php echo $_GET['project']; ?>" readonly="true">
                                                        <?php
                                                    }
                                                    if (isset($_GET['case'])) {
                                                        ?>
                                                        <input type="hidden" name="data[User][case]" value="<?php echo $_GET['case']; ?>" readonly="true">
                                                        <?php
                                                    }
                                                    if (isset($_GET['file'])) {
                                                        ?>
                                                        <input type="hidden" name="data[User][file]" value="<?php echo $_GET['file']; ?>" readonly="true">
                                                        <?php
                                                    }
                                                    ?>

                                                </div>
                                             
                                               <span style="float:right;margin-top:20px;" class="fl signinCls"><a href="javascript:void(0)" onclick="signupPanel();" style="color: #5b32b4;">Don't have an account</a></span>
                                                <div class="gap10 "></div>
                                                <div style="color: #726a84;font-size: 12px;font-weight: 300;margin-top:0px; margin-left:20px; display:none;" class="fl signupCls">
                                                By signing up you are agree that you have read, understand, and accept the <b><a href="#" style="color:#FF0000;margin:0;">License</a></b>
                                                <br/><br/>
                                                <button style="float:left;" type="button" value="Signup" name="submit_button" id="submit_button" class="btn submit-btn" onclick="return validateForm()">Signup</button>

                                                <span style="float:right;margin-top:20px;" class="fl signupCls"><a href="javascript:void(0)" onclick="signinPanel();" style="color: #5b32b4;">Already have an Account</a></span>
                                                <img src="<?php echo HTTP_ROOT."img/images/case_loader2.gif"; ?>" id="submit_loader" style="display:none;"/>

                                                <div class="gap10"></div>
                                                </div>
                                                
                                                <div class="cb"></div>
                                                <?php echo $this->Form->end(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cb"></div>
                                  <!--  <div style="padding:20px 0;text-align:center">
                                    	<a href="https://groups.google.com/forum/#!forum/COMPANY_NAME-community-support" target="_blank" style="margin:0;"><img src="<?php echo HTTP_ROOT."img/google_groups.jpg"; ?>"/></a>
                                        <br/>
                                    	You can ask for help, share your ideas, contribute to the community edition and also let us know your feedback using the <a href="https://groups.google.com/forum/#!forum/COMPANY_NAME-community-support" target="_blank" style="margin:0;">COMPANY_NAME's Google Group</a>.
                                        
                                    </div>-->
                                </div>
                            </div>
                            <div class="cb"></div>
							
                        </div>

                    </div>
                    <div class="cb"></div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<input type="hidden" name="pageurl" id="pageurl" value="<?php echo HTTP_ROOT; ?>" size="1" readonly="true"/>
<script>
<?php if($page =='new'){?>
$(".signupCls").show();
$(".signinCls").hide();
$("#email").css({"border":"1px solid #D4D4D4"});
$("#password").css({"border":"1px solid #D4D4D4"});
$("#company").css({"border":"1px solid #D4D4D4"});
<?php }?>
function signupPanel(){
$(".signupCls").show();
$(".signinCls").hide();
$("#email").css({"border":"1px solid #D4D4D4"});
$("#password").css({"border":"1px solid #D4D4D4"});
$("#company").css({"border":"1px solid #D4D4D4"});
}function signinPanel(){
$(".signupCls").hide();
$(".signinCls").show();
$("#email").css({"border":"1px solid #D4D4D4"});
$("#password").css({"border":"1px solid #D4D4D4"});
$("#company").css({"border":"1px solid #D4D4D4"});
}

    function validateForm() {

	var error_flag =1;
	var name = '';
	var email =$.trim($("#email").val());
	var password =$.trim($("#password").val());
	var company =$.trim($("#company").val());
	var timezone_id = $("#timezone_id").val();

	var emailRegEx = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var letterNumber = /^[0-9a-zA-Z]+$/;

	if(email == "") {
		$("#email").css({"border":"1px solid #FF0000"});
		$("#email").focus();
		error_flag=0;
	}else {
		if(!email.match(emailRegEx)){
                    $("#email").css({"border":"1px solid #FF0000"});
                    $("#email").focus();
                    error_flag=0;
		}
	}

	if(password == "") {
		$("#password").css({"border":"1px solid #FF0000"});
		$("#password").focus();
		error_flag=0;
	}
	if(company == "") {
		$("#company").css({"border":"1px solid #FF0000"});
		$("#company").focus();
		error_flag=0;
	}
	if(!error_flag){
            return false;
	}
        else {
	    $("#submit_button").hide();
	    $("#submit_loader").show();
	    var strURL = "<?php echo HTTP_ROOT;?>";
	    $.post(strURL+"users/register_user",{'email':email,'password':password,'company':company,'timezone_id':timezone_id},function(data) {
		//console.log(data);
		if(data.message == 'success'){
		    $('#userLoginForm').submit();
		}else{
		    alert(data.message);
                    $("#submit_button").show();
                    $("#submit_loader").hide();
		}
	    },'json');
	   
           return false;
        }
}
</script>
