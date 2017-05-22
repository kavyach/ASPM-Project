<html>
<head>
<script src="js/jquery.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/formoid-flat-green.js"></script>

<link rel="stylesheet" href="css/formoid-flat-green.css">
<link rel="stylesheet" href="css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">
<script>
var clicked=true;
function searchbox() {
    
                 if(clicked)
                 {
                 clicked=false;
                     document.getElementById("searchdiv").style.top = '0';
                     document.getElementById("searchdiv").style.zIndex = '1';
                     document.getElementById("container").style.WebkitTransition = "all 1s";
                      document.getElementById("container").style.transition = "all 1s";
                     document.getElementById("container").style.height = '80px';
                     
                 }
                 else
                 {
                 clicked=true;
                     document.getElementById("searchdiv").style.WebkitTransition = "all 1s";
                     document.getElementById("searchdiv").style.transition = "all 1s";
                     document.getElementById("searchdiv").style.top = '-20px';
                     document.getElementById("searchdiv").style.zIndex = '-1';
                     document.getElementById("container").style.height = '30px';
                 }
    
}
</script>
<title> Group 12 Shop</title>
</head>
<body>
<!--main div starts-->

<div id="main">
<div id="main1">

<!--inner div starts-->

<div id="innermain">
<img src="images/companylogo.png" width="100" height="80" style="position:relative; margin-left:10px;margin-top:15px">
</div>
<center>
<h1 style="margin-top:-150px; margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store</h1>
</center>
</div>

<!--inner end starts-->
<div id="container">
    <div id="nav">
        <ul>
        <center>
            <li><a href="index.php">Home</a></li>
            <li><a href="#" onclick="searchbox();">Search</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="mycart.php">MyCart</a></li>
        </center>
        </ul>
    </div>

    <div id="searchdiv">
        <center>
        <form id="searchform" method="post" action="search.php">
            <input class="formbox" type="text" placeholder="Enter the Name of the Product" name="searchword" id="searchword">
            <select id="searchstore" name="searchstore">
                <option selected>Select Store..</option>
                <option>Willys</option>
                <option>ICA</option>
            </select>
            <input class="myButton3" type="submit" value="Search" name="searchsubmit" id="searchsubmit">
        </form>
        </center>
    </div>
</div>

<hr>



<div id="nav"></div>
<div id="left">
<br>
<center>
<ul>
<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
<li style="background-color:#B2E7E9"><a href="willys.php">Willys</a></li>
<li><a href="ica.php">ICA</a></li>
<li style="background-color:#B2E7E9"><a href="citygross.php">CityGross</a></li>
<li><a href="coop.php">Coop</a></li>
<li style="background-color:#B2E7E9"><a href="hemkop.php">Hemköp</a></li>


</ul>
<center>
</div>
<br>
<div id="right"></div>
</div>

<br>
<br>
<!--main starts-->
<?php
    
    $fromcart=$_GET['fromcart'];
    if($fromcart=='yes')
    {
        echo "<center><p> Please <span style='color:red;font-style:italic'>Register</span> below and <span style='color:red;font-style:italic'>Login</span> to add items to your cart and place an order</p></center><br><br>";
    }
?>

<?php
    
    $fnameempty=$_GET['fnameempty'];
    $lnameempty=$_GET['lnameempty'];
    $unameempty=$_GET['unameempty'];
    $passempty=$_GET['passempty'];
    $repassempty=$_GET['repassempty'];
    $dobempty=$_GET['dobempty'];
    $emailempty=$_GET['emailempty'];
    $phoneempty=$_GET['phoneempty'];
    $addr1empty=$_GET['addr1empty'];
    $addr3empty=$_GET['addr3empty'];
    $addr4empty=$_GET['addr4empty'];
    $addr5empty=$_GET['addr5empty'];
    $addr6empty=$_GET['addr6empty'];
    $matching=$_GET['matching'];
    
    if($fnameempty=='yes' OR $lnameempty=='yes' OR $unameempty=='yes' OR $passempty=='yes' OR $repassempty=='yes' OR $dobempty=='yes' OR $emailempty=='yes' OR $phoneempty=='yes' OR $addr1empty=='yes' OR $addr3empty=='yes' OR $addr4empty=='yes' OR $addr5empty=='yes' OR $addr6empty=='yes')
    {
        echo "<center><p> The <span style='color:red;font-style:italic'>HIGHLIGHTED</span> fields have been left unfilled! Please fill all the fields and <span style='color:red;font-style:italic'> RESUBMIT </span> the form! </p></center><br><br>";
    }
    if($matching=='no')
    {
        echo "<center><p> The <span style='color:red;font-style:italic'>PASSWORD</span> and <span style='color:red;font-style:italic'>CONFIRM PASSWORD</span> do not MATCH! </p></center><br><br>";
    }
    ?>

<!--start registration form-->



<form class="formoid-flat-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:700px;min-width:150px" method="post" action="registeruser.php">
<div class="title"><h2>Registration Form</h2></div>

<div class="element-name">
<label class="title">Name</label><span class="nameFirst">
<?php
    
    if($fnameempty=='yes')
    {
        echo "<input  type='text' size='8' name='fname' id='fname' style='border-color:Red'/>";
    }
    else
    {
        echo "<input  type='text' size='8' name='fname' id='fname'/>";
    }
?>
<label class="subtitle">First</label></span><span class="nameLast">

<?php
    
    if($lnameempty=='yes')
    {
        echo "<input  type='text' size='14' name='lname' id='lname' style='border-color:Red'/>";
    }
    else
    {
        echo "<input  type='text' size='14' name='lname' id='lname'/>";
    }
    ?>

<label class="subtitle">Last</label></span></div>
<div class="element-input">
<label class="title">User Name</label>

<?php
    
    if($unameempty=='yes')
    {
        echo "<input class='large' type='text' name='input' id='input' style='border-color:Red'/>";
    }
    else
    {
        echo "<input class='large' type='text' name='input' id='input' />";
    }
    ?>
</div>

<div class="element-password">
<label class="title">Password</label>

<?php
    
    if($passempty=='yes' OR $matching=='no')
    {
        echo "<input class='large' type='password' name='password' id='password' value='' style='border-color:Red'/>";
    }
    else
    {
        echo "<input class='large' type='password' name='password' id='password' value='' />";
    }
    ?>
</div>

<div class="element-password">
<label class="title">Confirm Password</label>

<?php
    
    if($repassempty=='yes' OR $matching=='no')
    {
        echo "<input class='large' type='password' name='password1' id='password1' value='' style='border-color:Red'/>";
    }
    else
    {
        echo "<input class='large' type='password' name='password1' id='password1' value='' />";
    }
    ?>
</div>

<div class="element-date">
<label class="title">Date of Birth</label>
<?php
    
    if($dobempty=='yes')
    {
        echo "<input class='large' data-format='yyyy-mm-dd' type='date' name='date' id='date' placeholder='yyyy-mm-dd' style='border-color:Red'/>";
    }
    else
    {
        echo "<input class='large' data-format='yyyy-mm-dd' type='date' name='date' id='date' placeholder='yyyy-mm-dd'/>";
    }
    ?>
</div>

<div class="element-email">
<label class="title">Email</label>

<?php
    
    if($emailempty=='yes')
    {
        echo "<input class='large' type='email' name='email' id='email' value='' style='border-color:Red'/>";
    }
    else
    {
        echo "<input class='large' type='email' name='email' id='email' value='' />";
    }
    ?>
</div>

<div class="element-phone">
<label class="title">Phone</label>
<?php
    
    if($phoneempty=='yes')
    {
        echo "<input class='large' type='tel' pattern='[+]?[\.\s\-\(\)\*\#0-9]{3,}' maxlength='24' name='phone' id='phone'  value='' style='border-color:Red'/>";
    }
    else
    {
        echo "<input class='large' type='tel' pattern='[+]?[\.\s\-\(\)\*\#0-9]{3,}' maxlength='24' name='phone' id='phone'  value=''/>";
    }
    ?>
</div>

<div class="element-address">
<label class="title">Address</label><span class="addr1"><?php
    
    if($addr1empty=='yes')
    {
        echo "<input  type='text' name='addr1' id='addr1' style='border-color:Red'/>";
    }
    else
    {
        echo "<input  type='text' name='addr1' id='addr1' />";
    }
    ?><label class="subtitle">Street Address</label></span><span class="addr2"><input  type="text" name="addr2" id="addr2" /><label class="subtitle">Address Line 2</label></span><span class="city"><?php
        
        if($addr3empty=='yes')
        {
            echo "<input  type='text' name='city' id='city' style='border-color:Red'/>";
        }
        else
        {
            echo "<input  type='text' name='city' id='city' />";
        }
        ?><label class="subtitle">City</label></span><span class="state"><?php
            
            if($addr4empty=='yes')
            {
                echo "<input  type='text' name='state' id='state' style='border-color:Red'/>";
            }
            else
            {
                echo "<input  type='text' name='state' id='state' />";
            }
            ?><label class="subtitle">State / Province / Region</label></span><span class="zip"><?php
                
                if($addr5empty=='yes')
                {
                    echo "<input  type='text' maxlength='15' name='zip' id='zip' style='border-color:Red'/>";
                }
                else
                {
                    echo "<input  type='text' maxlength='15' name='zip' id='zip' />";
                }
                ?><label class="subtitle">Postal / Zip Code</label></span><div class="country"><?php
                    
                    if($addr6empty=='yes')
                    {
                        echo "<select name='country' id='country' style='border-color:Red'/>";
                    }
                    else
                    {
                        echo "<select name='country' id='country'>";
                    }
                    ?><option selected="selected" value="" disabled="disabled">--- Select a country ---</option>
<option value="United States">United States</option><option value="United Kingdom">United Kingdom</option><option value="Australia">Australia</option><option value="Canada">Canada</option><option value="France">France</option><option value="New Zealand">New Zealand</option><option value="India">India</option><option value="Brazil">Brazil</option><option value="----" disabled="disabled">----</option><option value="Afghanistan">Afghanistan</option><option value="Aland Islands">Aland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option><option value="Republic of the Congo">Republic of the Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote dIvoire">Cote dIvoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="North Korea">North Korea</option><option value="South Korea">South Korea</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
</select>
<i></i>
<label class="subtitle">Country</label>
<br>
</div>
</div>
<div class="submit">
<input type="submit" value="Submit" name="regsubmit"/>
</div>
</form>
<!--end registration form-->




<br>
<br>
<!-- footer-->
<div id="footer">
<ul>
<center>
<Br>
<br>
<li>
<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<a href='privacy.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Privacy Policy</a>";
    }
    else
    {
        echo "<a href='privacy.php?login=no&uid=$uid'>Privacy Policy</a>";
    }
    
    ?>

</li>
<li>

<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<a href='privacy.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Return Policy</a>";
    }
    else
    {
        echo "<a href='privacy.php?login=no&uid=$uid'>Return Policy</a>";
    }
    
    ?>
</li>
<li>
<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<a href='contact.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Contact Us</a>";
    }
    else
    {
        echo "<a href='contact.php?login=no&uid=$uid'>Contact Us</a>";
    }
    
    ?>

</li>
</ul>
</center>
<br>
<center>
<span style="color:white;align:center"> &copy; 2015 Group12Shop </span>
</center>
</div>

<!--footer end-->

</div>
</body>



</html>