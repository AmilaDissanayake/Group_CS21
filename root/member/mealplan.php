<?php include "includes/check_login.php" ?>

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

        <div class="welcomenote"><h1></h1></div>
 
        <!-- <div class="dashcover"></div> -->

        <!-- <div class="duhead"></div> -->
        <div class="divider"></div>
        <div class="uppart">
            <div class="divider1"></div>
            <div class="middle">

            
            <div class="note"><h1>Meal Plan</h1></div>
            <div class="member-list">
                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th></th>
                            <th>MONDAY</th>
                            <th>TUSEDAY</th>
                            <th>WEDNSEDAY</th>
                            <th>THURSDAY</th>
                            <th>FRIDAY</th>
                            <th>SATURDAY</th>
                            <th>SUNDAY</th>
                            
                        </tr>

                     </thead>
                    <tbody id="output">
                        <tr>
                            <td class="rcat"><div class="visul"><img src="./media/breakfast.png" alt=""></div><div class="ttag"><span class ="bpart">Breakfast</span></div></td>
                            <td><div class="item">Scrambled eggs with mushrooms and oatmeal</div></td>
                            <td><div class="item">Protein pancakes with light-syrup, peanut butter and raspberries</div></td>
                            <td><div class="item">Chicken sausage with egg and roasted potatoes</div></td>
                            <td><div class="item">Ground turkey, egg, cheese and salsa in a whole-grain tortilla</div></td>
                            <td><div class="item">Blueberries, strawberries and vanilla Greek yogurt on overnight oats</div></td>
                            <td><div class="item">Ground turkey and egg with corn, bell peppers, cheese and salsa</div></td>
                            <td><div class="item">Eggs sunny-side up and avocado toast</div></td>
                        </tr>

                        <tr>
                            <td class="rcat"><div class="visul"><img src="./media/snack1.png" alt=""></div><div class="ttag"><span class ="bpart">Snack</span></div></td>
                            <td><div class="item">Low-fat cottage cheese with blueberries</div></td>
                            <td><div class="item">Hard-boiled eggs and an apple.</div></td>
                            <td><div class="item">Greek yogurt and almonds.</div></td>
                            <td><div class="item">Yogurt with granola.</div></td>
                            <td><div class="item">Jerky and mixed nuts.</div></td>
                            <td><div class="item">Can of tuna with crackers.</div></td>
                            <td><div class="item">Protein balls and almond butter.</div></td>
                        </tr>

                        <tr>
                            <td class="rcat"><div class="visul"><img src="./media/lunch.png" alt=""></div><div class="ttag"><span class ="bpart">Lunch</span></div></td>
                            <td><div class="item">Venison burger, white rice and broccoli.</div></td>
                            <td><div class="item">Sirloin steak, sweet potato and spinach salad with vinaigrette.</div></td>
                            <td><div class="item">Turkey breast, basmati rice and mushrooms.</div></td>
                            <td><div class="item">Chicken breast, baked potato, sour cream and broccoli.</div></td>
                            <td><div class="item">Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.</div></td>
                            <td><div class="item">Tilapia fillet, potato wedges and bell peppers.</div></td>
                            <td><div class="item">Pork tenderloin slices with roasted garlic potatoes and green beans.</div></td>
                        </tr>

                        <tr>
                            <td class="rcat"><div class="visul"><img src="./media/snack2.png" alt=""></div><div class="ttag"><span class ="bpart">Snack</span></div></td>
                            <td><div class="item">Protein shake and a banana.</div></td>
                            <td><div class="item">Protein shake and walnuts.</div></td>
                            <td><div class="item">Protein shake and grapes.</div></td>
                            <td><div class="item">Protein shake and mixed berries.</div></td>
                            <td><div class="item">Protein shake and watermelon.</div></td>
                            <td><div class="item">Protein shake and pear.</div></td>
                            <td><div class="item">Protein shake and strawberries.</div></td>
                        </tr>

                        <tr>
                            <td class="rcat"><div class="visul"><img src="./media/dinner.png" alt=""></div><div class="ttag"><span class ="bpart">Dinner</span></div></td>
                            <td><div class="item">Salmon, quinoa and asparagus.</div></td>
                            <td><div class="item">Ground turkey and marinara sauce over pasta.</div></td>
                            <td><div class="item">Mackerel, brown rice and salad leaves with vinaigrette.</div></td>
                            <td><div class="item">Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.</div></td>
                            <td><div class="item">Ground beef with corn, brown rice, green peas and green beans.</div></td>
                            <td><div class="item">Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.</div></td>
                            <td><div class="item">Turkey meatballs, marinara sauce and parmesan cheese over pasta.</div></td>
                        </tr>

                    </tbody>
                </table>


            </div>
            </div>
            <div class="divider1"></div>
        </div>
        <div class="divider"></div>
        <div class="dwnpart">
            <div class="divider1"></div>
            <div class="lsd">
                <div class="note2"><h1>Suggestions for Meal Plan</h1></div>
                <div class="con1">
                    <div class="set1">
                        <p>Foods to Focus On</p>
                    </div>
                    <div class="set1">
                        <p>Foods to Limit</p>
                    </div>
                    <div class="set1">
                        <p>Bodybiliding supliments</p>
                    </div>
                </div>
            </div>
            <div class="divider3"></div>
            <div class="rsd">
            <div class="note2"><h1>Tips</h1></div>
                <div class="con1">
                    <div class="set1">
                        <p>How many calories do you need?</p>
                    </div>
                    <div class="set1">
                        <p>What is Macronutrient Ratio</p>
                    </div>
                </div>
            </div>
            <div class="divider1"></div>
        </div>
        <div class="divider"></div>    
           
    </section>
    <?php include "includes/footer.php" ?>


</body>

</html>