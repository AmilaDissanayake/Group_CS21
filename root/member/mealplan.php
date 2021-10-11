

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/mealplan.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1>HI! "NAME"</h1></div>
 
        <div class="dashcover"></div>
        <!-- <div class="dubar">
                <div class="duhead"><h2>Membership Type</h2></div>
                <div class="duline"><div class="remain"><h2>YEARS</h2><div class="time"><h1>YY</h1></div> </div><div class="remain"><h2>MONTHS</h2><div class="time"><h1>MM</h1></div></div><div class="remain"><h2>DAYS</h2><div class="time"><h1>DD</h1></div></div></div>
            </div> -->
        <div class="duhead"></div>
        <div class="divider"></div>
        <div class="uppart">
            <div class="note"><h1>Meal Plan</h1></div>
            <div class="member-list">
                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>MONDAY</th>
                            <th>TUSEDAY</th>
                            <th>WEDNSEDAY</th>
                            <th>THURSDAY</th>
                            <th>FRIDAY</th>
                            <th>SATURDAY</th>
                            <th>SUNDAY</th>
                        </tr>

                        <tr>
                            <td><b><div class="ttag"><span class ="bpart">Breakfast</span></div></b><br>Scrambled eggs with mushrooms and oatmeal</td>
                            <td><b><div class="ttag"><span class ="bpart">Breakfast</span></div></b><br>Protein pancakes with light-syrup, peanut butter and raspberries</td>
                            <td><b><div class="ttag"><span class ="bpart">Breakfast</span></div></b><br>Chicken sausage with egg and roasted potatoes</td>
                            <td><b><div class="ttag"><span class ="bpart">Breakfast</span></div></b><br>Ground turkey, egg, cheese and salsa in a whole-grain tortilla</td>
                            <td><b><div class="ttag"><span class ="bpart">Breakfast</span></div></b><br>Blueberries, strawberries and vanilla Greek yogurt on overnight oats</td>
                            <td><b><div class="ttag"><span class ="bpart">Breakfast</span></div></b><br>Ground turkey and egg with corn, bell peppers, cheese and salsa</td>
                            <td><b><div class="ttag"><span class ="bpart">Breakfast</span></div></b><br>Eggs sunny-side up and avocado toast</td>
                        </tr>

                    </thead>
                    <tbody id="output">

                    </tbody>
                </table>


            </div>
        
        </div>
        <div class="divider"></div>
        <div class="dwnpart">
            <div class="lsd">
                <div class="note2"><h1>General Meal Plan Suggestions</h1></div>

            </div>
            <div class="divider3"></div>
            <div class="rsd">
            <div class="note2"><h1>Tips</h1></div>

            </div>

        </div>
            
 

           
    </section>
    <?php include "includes/footer.php" ?>


</body>

</html>