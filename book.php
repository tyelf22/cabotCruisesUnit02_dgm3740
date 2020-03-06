<?php
 $title="Book";
 include '_top.php';
 ?>

<div class="formContainer">
    <h1>Book a Cruise</h1>
<form action="#">
        <label for="name">Full Name*:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="address">Adress:</label><br>
        <input type="text" id="address" name="address"><br><br>

        <label for="city">City:</label><br>
        <input type="text" id="city" name="city"><br><br>

        <!--State-->
        <label for="cruiseSelection">State:</label><br>
        <select id="cruiseSelection">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select><br><br>

        <label for="zipcode">Zipcode:</label><br>
        <input type="text" id="zipcode" name="zipcode"><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone"><br><br>

        <label for="email">Email*:</label><br>
        <input type="text" id="email" name="email" required><br><br>
        
        <!--Cruise Selection-->
        <label for="cruiseSelection">Cruise Selection:</label><br>

        <select id="cruiseSelection">
        <option value="entertainer">The Entertainer</option>
        <option value="alaska">Alaska</option>
        <option value="greatWhite">The Great White North</option>
        <option value="singapore">Singapore</option>
        </select><br><br>
        <p><span>*</span> required fields</p><br> 
        <button type="submit">Book My Cruise</button>
    </form>

</div>


<?php
 include '_bot.php';
 ?>