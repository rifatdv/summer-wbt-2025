<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <?php
        $fnameErr = $lnameErr = $compayErr=$addressErr=$addresErr=$emailErr = $reasoncontactErr = $servicesErr ="";
        $fname = $lname =$company=$address=$addres= $email = $reasoncontact = $services = $offering = $position = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["fname"])){
                $fnameErr = "First Name required";
            }
            else{
                $fname = test_input($_POST["fname"]);
            }

            if(empty($_POST["lname"])){
                $lnameErr = "Last Name required";
            }
            else{
                $lname = test_input($_POST["lname"]);
            }

            if(empty($_POST["company"])){
                $companyErr = "Company required";
            }
            else{
                $company = test_input($_POST["company"]);
            }

                if(empty($_POST["address"])){
                $addressErr = "Address required";
            }
            else{
                $address = test_input($_POST["address"]);
            }

                            if(empty($_POST["addres"])){
                $addresErr = "Address required";
            }
            else{
                $addres = test_input($_POST["address"]);
            }


        }

        function test_input($data){
            return htmlspecialchars(stripslashes(trim($data)));
        }   
    ?>

    <div class="wrapper">

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3 style="color: brown;">Donor information</h3>
            <div class="form-group">
                <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" placeholder="Enter first name"><span><strong>*</strong><?php echo $fnameErr;?></span> <br> 
            </div>
            <div class="form-group">
                <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" placeholder="Enter first name"><span><strong>*</strong><?php echo $lnameErr;?></span> <br> 
            </div>
            <div class="form-group">
                <input type="text" id="name" name="company" value="<?php echo $company; ?>" placeholder="Enter first name"><span><strong>*</strong><?php echo $companyErr;?></span> <br> 
            </div>
            <div class="form-group">
                <input type="text" id="name" name="address" value="<?php echo $address; ?>" placeholder="Enter first name"><span><strong>*</strong><?php echo $addressErr;?></span> <br> 
            </div>
            <div class="form-group">
                <input type="text" id="name" name="address" value="<?php echo $addres; ?>" placeholder="Enter first name"><span><strong>*</strong><?php echo $addresErr;?></span> <br> 
            </div>
            <div class="form-group">
                <input type="text" id="name" >
            </div>
            <div class="form-group">
                <label for="name">State<span>*</span></label>
                <select id="state" >
                    <option value="">Select State </option>
                    <option value="dhaka">Dhaka</option>
                    <option value="chittagong">Chittagong</option>
                    <option value="rajshahi">Rajshahi</option>
                    <option value="khulna">Khulna</option>
                    <option value="barisal">Barisal</option>
                    <option value="sylhet">Sylhet</option>
                    <option value="rangpur">Rangpur</option>
                    <option value="mymensingh">Mymensingh</option>
                </select><br>
            </div>

            <div class="form-group">
                <label for="name">Zip Code<span>*</span></label>
                <input type="text" id="name" >
            </div>

            <div class="form-group">
                <label for="name">Country<span>*</span></label>
                <select id="state" >
                    <option value="">Select State </option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Austrilia">Austrilia</option>
                    <option value="Africa">Africa</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Japan">Japan</option>

                </select><br>
            </div>

            <div class="form-group">
                <label for="name">Phone</label>
                <input type="text" id="name">
            </div>
            <div class="form-group">
                <label for="name">Fax</label>
                <input type="text" id="name">
            </div>




            <div class="form-group">
                <label for="email">Email<span>*</span></label>
                <input type="email" id="email" >

            </div>

            <div class="form-group">
                <div class="label-block">
                    <label for="name">Donation amount <span>*</span></label>
                    <p class="info">(check a button or type a amount)</p>
                    </div>
                
                <input type="radio" name="donation" >None<br>
                <input type="radio" name="donation">$50<br>
                <input type="radio" name="donation">$75<br>
                <input type="radio" name="donation">$100<br>
                <input type="radio" name="donation">$250<br>

            </div>
            <div class="form-group">
                <label for="name">Other Amount $</label>
                <input type="text" id="name">
            </div>

            <div class="form-group">
                <div class="label-block">
                   <label>Recurring Donation</label>
                   <p class="info">(check if yes)</p>
                </div>
                <div>
                    
                    <input type="checkbox" value="App development" >I am interested in giving on a regular
                    basis<br>
                    <label for="monthly_cc">Monthly Credit Card</label>
                    <input class="sizebox" type="text" id="name">
                    <label for="monthly_bank">For</label>
                    <input class="sizebox" type="text" id="name">
                    <label for="monthly_bank">Months
                </div>
            </div>

            <h3 style="color: brown;">Honorarium and Memorial Donation Information</h3>

            <div class="form-group">

                <label for="name">I would like to make this donation</label>

                <input type="radio" value="none" >To Honor<br>
                <input type="radio" value="50" >In Memory of<br>


            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name">
            </div>
            <div class="form-group">
                <label for="name">Acknowlegge Donation to<span>*</span></label>
                <input type="text" id="name" >
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" id="name">
            </div>

            <div class="form-group">
                <label for="name">City</label>
                <input type="text" id="name">
            </div>
            <div class="form-group">
                <label for="name">State<span>*</span></label>
                <select id="state" >
                    <option value="">Select State </option>
                    <option value="dhaka">Dhaka</option>
                    <option value="chittagong">Chittagong</option>
                    <option value="rajshahi">Rajshahi</option>
                    <option value="khulna">Khulna</option>
                    <option value="barisal">Barisal</option>
                    <option value="sylhet">Sylhet</option>
                    <option value="rangpur">Rangpur</option>
                    <option value="mymensingh">Mymensingh</option>
                </select><br>
            </div>
            <div class="form-group">
                <label for="name">Zip Code<span>*</span></label>
                <input type="text" id="name" >
            </div>

            <h3 style="color: brown;">Additional Information</h3>
            <p>Please enter your name, company or organization as you would like it to appear in our publications</p>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name">
            </div>

            <div class="form-group">

                <div>

                    <input type="checkbox" name="donation" >I would like to gift to remain anonymous.<br>
                    <input type="checkbox" name="donation">My empoyer offers a matching gift program. I will mail the
                    matching gift form.<br>
                    <input type="checkbox" name="donation" donation>Please save the cost of acknowledging this gift by
                    not mailing a thank you letter.<br>



                </div>
            </div>

            <div class="form-group">
                <div class="label-block">
                    <label for="comments">Comments</label>
                    <p class="info">(Please type any questions or feedback here)</p>
                </div>
                <input class="sizebox2" type="text" id="comments">
            </div>






            <div class="form-group">
                <label for="name">How may we contact you ?</label>
                <div>

                    <input type="checkbox" name="donation" >E-mail<br>
                    <input type="checkbox" name="donation">Postal mail<br>
                    
                    <input type="checkbox" name="donation">Telephone<br>
                    <input type="checkbox" name="donation">Fax<br>
                </div>

            </div>
            <p class="info">I would like to receive newsletters and information about special events by:</p>

            <div class="form-group">
                <label for="name">How may we contact you ?</label>
                <div>

                    <input type="checkbox" name="donation" >E-mail<br>
                    <input type="checkbox" name="donation">Postal mail<br>

                </div>
            </div>

            <input type="checkbox" value="App development" >I would like infromation about volunteering with
            the<br><hr>

            <div class="form-group">
                <label for="empty"></label>
                <input class="button" type="reset" value="Reset">&nbsp;
                <input class="button1" type="submit" value="Continue">
            </div>


                <p> 🔒Donate online with confidence. You are on a secure server</p>
                <p>If you have any problems or questions, please contact <a href="https://portal.aiub.edu/"
                        target="_blank" rel="blk">Support</a></p>

 
        </form>




    </div>
</body>

</html>