<html>

<head>
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="logingroup">
        <h1>Site Information</h1>
        <form action="register.php" method="post">
            <div>
                <div class  ="textbox">
                    <label for="site">Site</label>
                    <input type="text" id="site" name="site" value="">
                </div>
                <div class  ="textbox">
                    <label for="street">Street Address</label>
                    <input type="text" id="street" name="street" value="">
                </div>

                <div class  ="textbox">
                    <label for="telephone">Telephone</label>
                    <input type="text" id="telephone" name="telephone" value="">
                </div>

                <div class  ="textbox">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" value="">
                </div>


                <div class  ="textbox">
                    <label for="oemailadd">Office Email Address</label>
                    <input type="text" id="oemailadd" name="oemailadd" value="">
                </div>


                <div class  ="textbox">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" value="">
                </div>


                <div class  ="textbox">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" value="">
                </div>

                <div class  ="textbox">
                    <label for="pincode">Pin Code</label>
                    <input type="text" id="pincode" name="pincode" value="">
                </div>

                <div>
                    <label for="ethics">Ethics Committe Available?</label>
                    <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="yes">
                    <label for="ethicsy">Yes</label><br>
                    <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" value="no"><br>
                    <label for="ethicsn">No</label><br>
                </div>



                <div id="ifYes" style="display:none">
                    <h1>Ethics Committee Information</h1>
                    <div class  ="textbox">
                        <label for="ename">Name</label>
                        <input type="text" id="ename" name="ename" value="">

                        <div class  ="textbox">
                            <label for="sadress2">Street Address</label>
                            <input type="text" id="sadress2" name="sadress2" value="">
                        </div>
                        <div class  ="textbox">
                            <label for="telephone2">Telephone</label>
                            <input type="text" id="telephone2" name="telephone2" value="">
                        </div>
                        <div class  ="textbox">
                            <label for="city2">City</label>
                            <input type="text" id="city2" name="city2" value="">
                        </div>
                        <div class  ="textbox">
                            <label for="oemailadd2">Office Email Address</label>
                            <input type="text" id="oemailadd2" name="oemailadd2" value="">
                        </div>
                        <div class  ="textbox">
                            <label for="state2">State</label>
                            <input type="text" id="state2" name="state2" value="">
                        </div>
                        <div class  ="textbox">
                            <label for="website2">Website</label>
                            <input type="text" id="website2" name="website2" value="">
                        </div>
                        <div class  ="textbox">
                            <label for="pincode2">Pin Code</label>
                            <input type="text" id="pincode2" name="pincode2" value="">
                        </div>
                        <div class  ="textbox">
                            <label for="ethics">Ethics Committe Available?</label>
                            <input type="radio" name="eyesno" id="yesCheck" value="yes">
                            <label for="ethicsy">Yes</label><br>
                            <input type="radio" name="eyesno" id="noCheck" value="no"><br>
                            <label for="ethicsn">No</label><br>
                        </div>
                        <div class  ="textbox">
                            <label for="ecr">If Yes, EC Registration Number: </label>
                            <input type="text" id="ecr" name="ecr" value="">
                        </div>
                        <!-- <div class="form-group">
                            <label for="upload">Upload the Registration Certificate.(PDF Document Only)</label>
                            <input type="file" class="form-control-file" name="upload" id="upload">
                        </div> -->
                    </div>
                </div>

                <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed(this)" />
                <label for="check1">Declaration: I hereby declare that all above-mentioned information is in accordance with fact or truth
                    up to my knowledge and I bear the responsibilities for the correctness of the above-mentioned
                    particulars.
                </label><br>

                <div class  ="textbox">
                    <label for="nameofperson">Name</label>
                    <input type="text" id="nameofperson" name="nameofperson" value="">
                </div>

                <div class  ="textbox">
                    <label for="designation">Designation</label>
                    <input type="text" id="designation" name="designation" value="">
                </div>


                <button type="submit" id="submit" class="btn btn-primary btn-sm" disabled>Submit</button>



            </div>
        </form>

    </div>


    <script type="text/javascript">
        function yesnoCheck() {
            if (document.getElementById('yesCheck').checked) {
                document.getElementById('ifYes').style.display = 'block';
            } else document.getElementById('ifYes').style.display = 'none';

        }

        function terms_changed(termsCheckBox) {

            if (termsCheckBox.checked) {

                document.getElementById("submit").disabled = false;
            } else {

                document.getElementById("submit").disabled = true;
            }
        }
    </script>



</body>

</html>