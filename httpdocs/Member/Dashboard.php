<?php include_once("header.php");?>
<style>
.formHeadline {
 
    display: flex;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;
    margin-bottom: 15px;

}
.formHeadline .labelIcon {

    width: 25px;
    height: 25px;
    display: flex;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;

}

.info_icon {

    background-position: -211px -1966px;

}
.profileIconBox {

    display: flex;
    width: 24px;
    height: 24px;
    background-image: url("/3e42eaf0521eb8301f921ab0c7d868b9.svg");
    background-repeat: no-repeat;
    background-size: auto;

}
.formHeadline .textBox {

    display: flex;
    flex: 1 1 0%;
    padding: 5px 10px;
    font-family: "Roboto", sans-serif;
    color: #757575;
}
.formHeadline .labelInformation {

    width: 25px;
    height: 25px;
    display: flex;
    align-items: flex-start;

}
.pr:hover{
    color:#757575;
}
.pr{
    color:#757575;
}
.RightsideMenuInformationbox {
   min-height:64px;padding:15px;margin-top: 15px;
   border: 1px solid #d0d7dc !important;
   border-radius: 5px;
   background: white; 
}
.rightsidemenudetails{
  font-weight: 500;font-size: 14px;color: rgb(117, 117, 117);  
}
.react-form-group .uploadField label {
    display: flex;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;
    height: 40px;
    border-radius: 4px;
    background-color: rgb(249, 249, 249);
    border: 1px solid rgb(0, 174, 104);
    padding: 10px;
}
.labelTextUpload{
    color: #00ae68;
   font-size: 13px;
   font-weight: 500;
   padding-left: 10px;
   padding-top: 31px;
   line-height: 33px;
}
   .selected{
 border:2px solid green  !important;
}
.selected .innerDiv {
 background:green !important;
}
.innerDiv {
    text-align:center;background:#ccc;color:#fff;padding:5px;font-size:14px; 
}

.optionsecoptions .innerDiv {
    background:#aaa;
}
.optionsecoptions {
  cursor:pointer; background-color:#f6f6f6; height:138px;width:130px;float:left;margin-right:15px;padding:0px;border:2px solid #ccc;
} 
a:hover {

    color: pink;
}
</style> 
<div class="container content-wrapper" style="margin-top:20px">
    <div class="col-sm-12">
        <div class="col-sm-1"></div>
        <div class="col-sm-4" style="margin-top: -13px;margin-bottom: 7px;margin-left: 2px;"><h4 style="font-size: 17px;font-weight: 600;color: rgb(117, 117, 117);flex: 1 1 0%;line-height: 32px;">My Profile</h4></div>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-1"></div>
        <div class="col-sm-4" >
            <div class="Informationbox" style="min-height:64px;padding:15px;cursor: pointer;">
                <a href="#demo" class="pr" data-toggle="collapse"><span><img src="../images/profileicon.png"><span style="font-weight: 500;font-size: 14px;color: rgb(117, 117, 117);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeyaraj</span></span></a>
                    <div id="demo" class="collapse" style="margin-top: 15px;">
                       <img src="../images/msgbox.png"><span style="color: rgb(117, 117, 117);font-weight:400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jeyaraj_123@yahoo.com</span> <br><br>
                       <img src="../images/phone.png"><span style="color: rgb(117, 117, 117);font-weight:400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9944872965</span>
                    </div>
            </div>
            <div style="cursor: pointer;" class="RightsideMenuInformationbox" id="RightsideMenuInformationbox" onclick="loadpage('PersonalInformation')">
                <a ><img src="../images/personalicon.png"><span class="rightsidemenudetails">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#1fb068">Update</span> Personal Information</span></a><div style="float:right;margin-top: 10px;"><img src="../images/red!icon.png"></div>
            </div>
            <div style="cursor: pointer;"  class="RightsideMenuInformationbox" id="RightsideEducationalInformation" onclick="loadpage('EducationalInformation')">
                <a><img src="../images/educationalicon.png"><span class="rightsidemenudetails">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#1fb068">Update</span> Educational Detail</span></a><div style="margin-top: 10px;float:right"><img src="../images/red!icon.png"></div>
            </div>
            <div style="cursor: pointer;"  class="RightsideMenuInformationbox" id="RightsideBankDetails" onclick="loadpage('BankDetails')">
                <a><img src="../images/bankicon.png"><span class="rightsidemenudetails">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#1fb068">Update</span> Bank Detail</span></a><div style="margin-top: 10px;float:right"><img src="../images/red!icon.png"></div>
            </div>
            <div style="cursor: pointer;"  class="RightsideMenuInformationbox" id="RightsideDoccuments" onclick="loadpage('UploadDocument')">
                <a><img src="../images/documenticon.png"><span class="rightsidemenudetails">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#1fb068">Upload</span> Documents</span></a><div style="margin-top: 10px;float:right"><img src="../images/red!icon.png"></div>
            </div>
            <div style="cursor: pointer;"  class="RightsideMenuInformationbox" id="RightsideBusinessInformation">
                <a><img src="../images/businessicon.png"><span class="rightsidemenudetails">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#1fb068">Upload</span> Business Information</span></a><div style="margin-top: 10px;float:right"><img src="../images/red!icon.png"></div>
            </div>
        </div>
        <div class="col-sm-6" id="resdiv">
            
            </div>
        </div>
    </div>
    <div style="display: none;">
    <div id="PersonalInformation">
    <div class="Informationbox"  style="height:687px;">
                <div class="formHeadline">
                    <div class="textBox" style="margin-top: 13px;margin-left:10px"><img src="../images/pr.png">&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-top: -3px;">Personal Information</span></div>
                    <div class="labelInformation" style="margin-right: 15px;margin-top: 10px;"><img src="../images/!icon.png"></div>
                </div>
                <form action="" method="post" id="">
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Full Name</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox " placeholder="Full Name" id="FullName" name="FullName" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Email</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox" placeholder="Email Address" id="Email" name="Email" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Mobile</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox" placeholder="Mobile" id="Mobile" name="Mobile" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Alternate Mobile</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox" placeholder="AlternateMobile" id="AlternateMobile" name="AlternateMobile" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Address</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox" placeholder="Address" id="Address" name="Address" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Pincode</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox" placeholder="Pincode" id="Pincode" name="Pincode" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Pincode</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox" placeholder="Pincode" id="Pincode" name="Pincode" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">City</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox" placeholder="City" id="City" name="City" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">State</span></div>
                        <div class="col-sm-7">
                            <select name="state" id="state" style="border-radius: 5px;background: #f9f9f9;" >
                                <option>Tamilnadu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Gender</span></div>
                        <div class="col-sm-7">
                            <label class="radio-inline"><input type="radio" name="Male" style="outline:0">Male</label>
                            <label class="radio-inline"><input type="radio" name="Female">Female</label></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Marital Status</span></div>
                        <div class="col-sm-7">
                            <select name="state" id="state" style="border-radius: 5px;background: #f9f9f9;" >
                                <option>Select marital status</option>
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                            </select>
                        </div>
                    </div>
                    <div style="float:right;margin-right: 20px;"><button type="submit" class="submitbutton"><span class="buttontext">Update & Continue</span></button></div>
                    </form>
                </div>
                </div>
    <div id="EducationalInformation">
                <div class="Informationbox" style="height: 560px;">
                <div class="formHeadline">
                    <div class="textBox" style="margin-top: 13px;margin-left:10px"><img src="../images/Educationalcap.png">&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-top: -3px;">Education Detail</span></div>
                    <span style="font-size: 10px;color: #757575;">Only jpeg, png & pdf with maximum size of 5 MB is allowed.</span><div class="labelInformation" style="margin-right: 15px;margin-top: 10px;"><img src="../images/!icon.png"></div>
                </div>
                <form action="" method="post" id="">
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Educational Qualification</span></div>
                        <div class="col-sm-7">
                            <select name="state" id="state" style="border-radius: 5px;background: #f9f9f9;" >
                                <option value="Married">SSC</option>
                                <option value="Unmarried">HSC</option>
                                <option value="Graduation">Graduation</option>
                                <option value="PostGraduation">Post Graduation</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Upload</span></div>
                        <div class="col-sm-7">
                           <div class="uploadField" style="border: 1px solid #00ae68;border-radius: 5px;border-radius: 5px;background: #f9f9f9">
                                <label for="educationQualificationFile" style="height: 30px;">
                                    <input class="typeFile" type="file" id="educationQualificationFile" style="display: none;">
                                    <p><span class="labelTextUpload">Upload certificate (ssc or above) </span><span class="labelIcon" style="padding-left: 12px;"><img src="../images/uploadicon.png" alt=""></span></p>
                                </label>
                           </div>
                        </div>
                    </div>
                    <div style="float: right;margin-right: 20px;"><button type="submit" class="submitbutton"><span class="buttontext">Update & Continue</span></button></div>
                    </form>
                </div>
    </div>
    <div id="BankDetails">
                <div class="Informationbox" style="height: 560px;">
                <div class="formHeadline">
                    <div class="textBox" style="margin-top: 13px;margin-left:10px"><img src="../images/bankdicon.png">&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-top: -3px;">Bank Detail</span></div>
                    <div class="labelInformation" style="margin-right: 15px;margin-top: 10px;"><img src="../images/!icon.png"></div>
                </div>
                <form action="" method="post" id="">
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Bank Name</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox " placeholder="Eg: State bank of India" id="BankName" name="BankName" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Account Holder Name</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox " placeholder="Enter account holder name" id="AccountHolderName" name="AccountHolderName" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Bank account number</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox " placeholder="Enter bank account number" id="BankAccountNumber" name="BankAccountNumber" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">IFSC</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox " placeholder="Eg: PBIN0633233" id="IFSC" name="IFSC" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Cancelled cheque / passbook /<br> bank statement</span></div>
                        <div class="col-sm-7">
                             <div class="uploadField" style="border: 1px solid #00ae68;border-radius: 5px;border-radius: 5px;background: #f9f9f9">
                                <label for="bankDetailFile" style="height: 30px;">
                                    <input class="typeFile" type="file" id="bankDetailFile" style="display: none;">
                                    <p><span class="labelTextUpload">Upload</span><span class="labelIcon" style="padding-left: 12px;"><img src="../images/uploadicon.png" alt=""></span></p>
                                </label>
                           </div>
                        </div>
                    </div>
                    <div style="float: right;margin-right: 20px;"><button type="submit" class="submitbutton"><span class="buttontext">Update & Continue</span></button></div>
                    </form>
                </div>
    </div>
    <div id="UploadDocument">
                <div class="Informationbox" style="height: 560px;">
                <div class="formHeadline">
                    <div class="textBox" style="margin-top: 13px;margin-left:10px"><img src="../images/docicon.png">&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-top: -3px;">Upload Document</span></div>
                    <div class="labelInformation" style="margin-right: 15px;margin-top: 10px;"><img src="../images/!icon.png"></div>
                </div>
                <form action="" method="post" id="">
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">PAN card number</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox " placeholder="Enter PAN card number" id="PanCardNumber" name="PanCardNumber" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Upload PAN card</span></div>
                        <div class="col-sm-7">
                            <div class="uploadField" style="border: 1px solid #00ae68;border-radius: 5px;border-radius: 5px;background: #f9f9f9">
                                <label for="pancardFile" style="height: 30px;">
                                    <input class="typeFile" type="file" id="pancardFile" style="display: none;">
                                    <p><span class="labelTextUpload">Photo copy of your PAN </span><span class="labelIcon" style="padding-left: 12px;"><img src="../images/uploadicon.png" alt=""></span></p>
                                </label>
                           </div>
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Adhaar Card Number</span></div>
                        <div class="col-sm-7"><input type="text" class="inputbox " placeholder="Enter Adhaar card number" id="AdhaarCardNumber" name="AdhaarCardNumber" value=""></div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Upload Adhaar card</span></div>
                        <div class="col-sm-7">
                            <div class="uploadField" style="border: 1px solid #00ae68;border-radius: 5px;border-radius: 5px;background: #f9f9f9">
                                <label for="adhaarcardFile" style="height: 30px;">
                                    <input class="typeFile" type="file" id="adhaarcardFile" style="display: none;">
                                    <p><span class="labelTextUpload">Photo copy of your Aadhar card </span><span class="labelIcon" style="padding-left: 12px;"><img src="../images/uploadicon.png" alt=""></span></p>
                                </label>
                           </div>
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Upload Adhaar card back</span></div>
                        <div class="col-sm-7">
                            <div class="uploadField" style="border: 1px solid #00ae68;border-radius: 5px;border-radius: 5px;background: #f9f9f9">
                                <label for="adhaarcardbackFile" style="height: 30px;">
                                    <input class="typeFile" type="file" id="adhaarcardbackFile" style="display: none;">
                                    <p><span class="labelTextUpload">Photo copy of your Aadhar card back </span><span class="labelIcon" style="padding-left: 12px;"><img src="../images/uploadicon.png" alt=""></span></p>
                                </label>
                           </div>
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-5" style="padding-top: 5px;padding-left: 35px;"><span class="labelR">Profile image</span></div>
                        <div class="col-sm-7">
                            <div class="uploadField" style="border: 1px solid #00ae68;border-radius: 5px;border-radius: 5px;background: #f9f9f9">
                                <label for="profilepicture" style="height: 30px;">
                                    <input class="typeFile" type="file" id="profilepicture" style="display: none;">
                                    <p><span class="labelTextUpload">Profile picture</span><span class="labelIcon" style="padding-left: 12px;"><img src="../images/uploadicon.png" alt=""></span></p>
                                </label>
                           </div>
                        </div>
                    </div>
                    <div style="float: right;margin-right: 20px;"><button type="submit" class="submitbutton"><span class="buttontext">Update & Continue</span></button></div>
                    </form>
                </div>
    </div>
    </div>
   <script>
     function loadpage(pOption){
     $("#resdiv").html("");
     if (pOption=="PersonalInformation") {
        $("#resdiv").html($('#PersonalInformation').html());
        $('#RightsideMenuInformationbox').css({"background":"#ffffff"});
        $('#RightsideEducationalInformation').css({"background":"#f9fcfe"});
        $('#RightsideBankDetails').css({"background":"#f9fcfe"});
        $('#RightsideDoccuments').css({"background":"#f9fcfe"});
        $('#RightsideBusinessInformation').css({"background":"#f9fcfe"});
     }
     if (pOption=="EducationalInformation") {
        $("#resdiv").html($('#EducationalInformation').html());
        $('#RightsideMenuInformationbox').css({"background":"#f9fcfe"});
        $('#RightsideEducationalInformation').css({"background":"#ffffff"});
        $('#RightsideBankDetails').css({"background":"#f9fcfe"});
        $('#RightsideDoccuments').css({"background":"#f9fcfe"});
        $('#RightsideBusinessInformation').css({"background":"#f9fcfe"});
     }
     if (pOption=="BankDetails") {
        $("#resdiv").html($('#BankDetails').html());
        $('#RightsideMenuInformationbox').css({"background":"#f9fcfe"});
        $('#RightsideEducationalInformation').css({"background":"#f9fcfe"});
        $('#RightsideBankDetails').css({"background":"#ffffff"});
        $('#RightsideDoccuments').css({"background":"#f9fcfe"});
        $('#RightsideBusinessInformation').css({"background":"#f9fcfe"});
     }
     if (pOption=="UploadDocument") {
        $("#resdiv").html($('#UploadDocument').html());
        $('#RightsideMenuInformationbox').css({"background":"#f9fcfe"});
        $('#RightsideEducationalInformation').css({"background":"#f9fcfe"});
        $('#RightsideBankDetails').css({"background":"#f9fcfe"});
        $('#RightsideDoccuments').css({"background":"#ffffff"});
        $('#RightsideBusinessInformation').css({"background":"#f9fcfe"});
     }
     
     }
    </script>
    <br>
    <!-- signup popup -->
    <div class="col-sm-12">
       <div class="col-sm-3"></div>
       <div class="col-sm-6">
            <div id="primaryproduct" style="text-align:center;min-height:336px;width:608px;border:1px solid #ccc;background: white;display:none;padding-top: 17px;">
               <span style="font-size: 18px;">Select your primary product</span>
               
               <div style="padding-top: 20px;height: 173px;padding:20px">
                <div style="background:green">
                    <div class="optionsecoptions" id="div_1">
                        <div style="text-align:center;padding:20px;font-weight: normal;font-size:16px" id="div_111">
                            <span style="color:red;font-weight: normal;"></span>
                        </div>
                        <div style="text-align:center;font-weight: normal;cursor:pointer;color:blue" id="div_1111">
                            View
                        </div>
                    </div>
                    <div class="optionsecoptions" id="div_2">
                        <div style="text-align:center;padding:20px;font-weight: normal;font-size:16px" id="div_222">
                            <span style="color:red;font-weight: normal;"></span>
                        </div>
                        <div style="text-align:center;font-weight: normal;cursor:pointer;color:blue" id="div_2222">
                            View
                        </div>
                    </div>
                    <div class="optionsecoptions" id="div_3"> 
                        <div style="text-align:center;padding:20px;font-weight: normal;font-size:16px" id="div_333">
                            <span style="color:red;font-weight: normal;"></span>
                        </div>
                        <div style="text-align:center;font-weight: normal;cursor:pointer;color:blue" id="div_3333">
                            View
                        </div>
                    </div>
                    <div class="optionsecoptions" id="div_4" style="margin-right: -7px;">
                        <div style="text-align:center;padding:20px;font-weight: normal;font-size:16px" id="div_444">
                            <span style="color:red;font-weight: normal;"></span>
                        </div>
                        <div style="text-align:center;font-weight: normal;cursor:pointer;color:blue" id="div_4444">
                            View
                        </div>
                    </div>
                </div>
               </div>
                
               <div class="col-sm-12" style="clear:both;border-top:1px solid black;line-height: 14px;">
                <div class="col-sm-3" style="border-right:1px solid black;min-height:118px;width: 166px;padding:10px">
                    <span style="line-height: 25px;">Bank information</span>
                    <small>XXXXXXXXXXXX</small>
                    <small>XXXXXXXXXXXX</small>
                    <small>XXXXXXXXXXXX</small>
                    <small>XXXXXXXXXXXX</small>
                </div>
                <div class="col-sm-3" style="min-height:100px;width: 166px;padding:20px;float:left;">
                <br><br><br>
                    <select name="mode" id="mode">
                         <option>NEFT</option>
                         <option>IMPS</option>
                    </select>
                   </div>
                   <div class="col-sm-3" style="min-height:100px;width: 166px;padding:20px;float:left;">
                   <br><br><br> 
                    <input type="text" name="transactionid" id="transactionid">   
                  </div>
                  <div class="col-sm-3" style="min-height:100px;width: 50px;float:left;">
                  <br><br><br><br> 
                    <button type="submit" class="btn btn-primary" style="height: 35px;width: 65px;padding: 2px;">Submit </button>  
                  </div>  
                </div>
                <div class="col-sm-12" style="clear:both;border-top:1px solid black;line-height: 20px;padding-top: 2px;background: green;color: white;">
                <small><b>Cash deposite not allowed. only allowed same bank to same bank/ NEFT / imps modes.</b></small>
               </div>
            </div>
       </div>
      </div> 
   <div class="col-sm-12">
       <div class="col-sm-3"></div>
       <div class="col-sm-6"><br><br>
            <div style="align:center;height:300px;width:600px;background:white">
               <div class="col-sm-12" style="clear:both;line-height: 15px;">
                    <div class="col-sm-2" style="padding: 20px;"><img src="../images/tick.png" style="max-width: 138%;"></div>
                    <div class="col-sm-10" style="padding-top: 44px;"><span>You have submitted at date for plan 1</span></div>
               </div>
               <div class="col-sm-12" style="clear:both;line-height: 15px;">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2"><span>Mode:</span></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2"><span>Txn id:</span></div>
                    <div class="col-sm-2"></div>
               </div>
               <div class="col-sm-12" style="clear:both;line-height: 15px;margin-top: 20px;">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2"><span>Date:</span></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2"><span>Amount:</span></div>
                    <div class="col-sm-2"></div>
               </div>
       <div class="col-sm-12" style="clear:both;border-top:1px solid black;line-height: 15px;margin-top: 22px;">
                <div class="col-sm-3" style="border-right:1px solid black;min-height:100px;width: 166px;padding:10px">
                    <span style="line-height: 25px;">Bank info</span>
                    <small>XXXXXXXXXXXX</small>
                    <small>XXXXXXXXXXXX</small>
                    <small>XXXXXXXXXXXX</small>
                    <small>XXXXXXXXXXXX</small>
                </div>
                <div class="col-sm-9" style="min-height:100px;width: 404px;padding:50px;float:left;padding-left: 122px;">
                      <span>Re-declare-payment info</span>
                </div>
   </div>
   </div>
   </div>
</div>
<div class="col-sm-12">
       <div class="col-sm-3"></div>
       <div class="col-sm-6"><br><br>
            <div style="align:center;height:300px;width:600px;background:white">
               <div class="col-sm-12" style="clear:both;line-height: 15px;">
                    <div class="col-sm-2" style="padding: 20px;"><img src="../images/tick.png" style="max-width: 138%;"></div>
                    <div class="col-sm-10" style="padding-top: 44px;"><span>You have submitted at date for plan 1</span></div>
               </div>
               <div class="col-sm-12" style="clear:both;line-height: 15px;">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3"><span>Activation date:</span></div>
                    <div class="col-sm-3"></div>
               </div>
               <div class="col-sm-12" style="clear:both;line-height: 15px;margin-top: 20px;">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3"><span>Expire Date:</span></div>
                    <div class="col-sm-3"></div>
               </div>
               <div class="col-sm-12" style="clear:both;line-height: 15px;margin-top: 20px;">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3"><span>Product:</span></div>
                    <div class="col-sm-3"></div>
               </div>
               <div class="col-sm-12" style="clear:both;line-height: 15px;margin-top: 20px;">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4"><a href="#" class="continuelink" style="float:right;">Click to continue</a></div>
               </div>
               
             </div>
   </div>                                   
   </div>
   
    <div class="col-sm-12">
       <div class="col-sm-3"></div>
       <div class="col-sm-6"><br><br>
            <div style="align:center;height:326px;width:600px;background:white">
               <div class="col-sm-12" style="clear:both;line-height: 15px;">
                    <div class="col-sm-2" style="padding: 20px;"><img src="../images/crosssymbol.jpg" style="max-width: 138%;"></div>
                    <div class="col-sm-10" style="padding-top: 30px;"><span style="line-height: 25px;">You payment has been failure.<br>please check your side.</span></div>
               </div>
               <div class="col-sm-12" style="clear:both;line-height: 15px;">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3"><span>Plan:</span></div>
                    <div class="col-sm-3"></div>
               </div>
               <div class="col-sm-12" style="clear:both;line-height: 15px;margin-top: 20px;">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3"><span>mode:</span></div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"><span>Amount:</span></div>
                    <div class="col-sm-3"></div>
               </div>
               <div class="col-sm-12" style="clear:both;line-height: 15px;margin-top: 20px;">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3"><span>Date:</span></div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"><span>Txn id:</span></div>
                    <div class="col-sm-3"></div>
               </div>
                <div class="col-sm-12" style="clear:both;border-top:1px solid black;line-height: 15px;margin-top:12px">
                <div class="col-sm-3" style="border-right:1px solid black;min-height:100px;width: 166px;padding:10px">
                    <span style="line-height: 25px;">Bank info</span>
                    <small>XXXXXXXXXXXX</small>
                    <small>XXXXXXXXXXXX</small>
                    <small>XXXXXXXXXXXX</small>
                    <small>XXXXXXXXXXXX</small>
                </div>
                <div class="col-sm-3" style="min-height:100px;width: 166px;padding:20px;float:left;">
                    <select name="mode" id="mode" style="margin-top: 16px;">
                         <option>NEFT</option>
                         <option>IMPS</option>
                    </select>
                   </div>
                   <div class="col-sm-3" style="min-height:100px;width: 166px;padding:20px;float:left;"> 
                    <input type="text" name="transactionid" id="transactionid" style="margin-top: 16px;">   
                  </div>
                  <div class="col-sm-3" style="min-height:100px;width: 50px;float:left;"> 
                    <button type="submit" class="btn btn-primary" style="height: 35px;width: 65px;margin-top: 35px;padding: 2px;">Submit </button>  
                  </div>  
                </div>
             </div>
   </div>
   </div>
   
   

       
       
   
<script>
function windowopen() {
  window.open("gametablepage.php");
}
function _popupclose() {
    $.unblockUI();
}
function primaryproduct(primaryid) {
      
    
        $.blockUI({ 
            message: $('#primaryproduct'), 
            css: {  
                  top:  '300px', 
                left: ($(window).width() - 540.5) /2 + 'px', 
                width: '614px',
                 
            } 
        }); 
}

 
</script>        
       
<?php  include_once("footer.php");?>