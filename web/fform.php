<?php
require 'product.php';
session_start();
require 'fheader.php';
require 'fnavbar.php';



 ?>
<body>
  <div class="ink-grid align-center">
    <div class="column-group">
      <?php require 'fbg.php'; ?>
    </div>
    <div class="all-50">
      <div class="column-group">
        <form class="ink-form" action="/final.php" method="get">

          <div class="control-group">
              <label for="firstname">First Name</label>
              <div class="control">
                  <input id="firstname" name="firstname" type="text" placeholder="John">
              </div>
          </div>
          <div class="control-group">
              <label for="lastname">Last Name</label>
              <div class="control">
                  <input id="lastname" name="lastname" type="text" placeholder="Smith">
              </div>
          </div>
          <div class="control-group">
              <label for="street">Street</label>
              <div class="control">
                  <input id="street" name="street" type="text" placeholder="111 Example Road">
              </div>
          </div>
          <div class="control-group">
              <label for="town">Town</label>
              <div class="control">
                  <input id="town" name="town" type="text" placeholder="Town">
              </div>
          </div>
          <div class="control-group">
              <label for="state">State</label>
              <div class="control">
                  <select name="state">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
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
                  </select>
            </div>
          </div>

          <div class="control-group">
              <label for="zip">Zip Code</label>
              <div class="control">
                  <input id="zip" name="zip" type="number" placeholder="00000">
              </div>
          </div>



            <div class="control-group">
                <label for="email">Email</label>
                <div class="control">
                    <input id="email" name="email" type="text" placeholder="example@example.com">
                </div>
            </div>

            <div class="control-group">
                <label for="phone">Phone</label>
                <div class="control">
                    <input id="phone" name="phone" type="tel" placeholder="111-111-1111">
                </div>
            </div>
            <div class="control-group">
                <label for="submit"></label>
                <div class="control">
                    <input id="submit" name="submit" type="submit">
                </div>
            </div>

        </form>
      </div>


    </div>
    <div class="all-50">
      <div class="column-group">
          <h2>Your Cart</h2>
          <ul style="list-style-type:none">
          <?php
          $myloc = $_SESSION["items"];

          $lenproarr = count($_SESSION["cart"]);
          $sum = 0.00;
          for ($i=0; $i < $lenproarr; $i++) {

              echo $myloc[(int)$_SESSION["cart"][$i]-1]->print_final_cart(), "\n";
              $sum += $myloc[(int)$_SESSION["cart"][$i]-1]->price;
          }


           ?>
           <hr style="width: 40%" class="push-center">
           </ul>
           <ul style="list-style-type:none">
             <li><?php echo "Total&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\$&ensp;", $sum ?></li>
           </ul>


      </div>

    </div>

  </div>



</body>
