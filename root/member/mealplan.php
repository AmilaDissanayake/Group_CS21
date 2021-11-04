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
        <div class="HdividerL"></div>
        <div class="uppart">
            <div class="vboderdivider"></div>
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
                <div class="fixT">
                    <button class="check_btn" id="tbook" type="submit" name="time-submit">EDIT MEAL PLAN</button>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="divider"></div>
        <div class="dwnpart">
            <div class="vboderdivider"></div>
            <div class="lsd">
                <div class="note2"><h1>Suggestions for Meal Plan</h1></div>
                <div class="con1">
                    <div class="set1">
                        <p>Foods to Focus On</p>
                        <span class="fade-effect2"></span>
                        <ul>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Meats, poultry and fish:</b> <br>Sirloin steak, ground beef, pork tenderloin, venison, chicken breast, salmon, tilapia and cod.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Dairy:</b> <br>Yogurt, cottage cheese, low-fat milk and cheese.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Grains:</b> <br>Bread, cereal, crackers, oatmeal, quinoa, popcorn and rice.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Fruits:</b> <br>Oranges, apples, bananas, grapes, pears, peaches, watermelon and berries.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Starchy vegetables:</b> <br>Potatoes, corn, green peas, green lima beans and cassava.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Vegetables:</b> <br>Broccoli, spinach, leafy salad greens, tomatoes, green beans, cucumber, zucchini, asparagus, peppers and mushrooms.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Seeds and nuts:</b> <br>Almonds, walnuts, sunflower seeds, chia seeds and flax seeds.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Beans and legumes:</b> <br>Chickpeas, lentils, kidney beans, black beans and pinto beans.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Oils:</b> <br>Olive oil, flaxseed oil and avocado oil.</li>
                        </ul>
                    </div>
                    <div class="set1">
                        <p>Foods to Limit</p>
                        <span class="fade-effect2"></span>
                        <ul class="flimit">
                            <li><i class='bx bxs-caret-right-circle'></i><b>Alcohol:</b> <br>Alcohol can negatively affect your ability to build muscle and lose fat, especially if you consume it in excess.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Added sugars:</b> <br>These offer plenty of calories but few nutrients. Foods high in added sugars include candy, cookies, doughnuts, ice cream, cake and sugar-sweetened beverages, such as soda and sports drinks.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Deep-fried foods:</b> <br>These may promote inflammation and — when consumed in excess — disease. Examples include fried fish, french fries, onion rings, chicken strips and cheese curds.</li>
                            <li><br>In addition to limiting these, you may also want to avoid certain foods before going to the gym that can slow digestion and cause stomach upset during your workout.</li>
                            <li><b>These include:</b></li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>High-fat foods:</b> <br>High-fat meats, buttery foods and heavy sauces or creams.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>High-fiber foods:</b> <br>Beans and cruciferous vegetables like broccoli or cauliflower.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Carbonated beverages:</b> <br>Sparkling water or diet soda.</li>
                        </ul>
                    </div>
                    <div class="set1">
                        <p>Bodybiliding supliments</p>
                        <span class="fade-effect2"></span>
                        <ul>
                            <li><br>Many bodybuilders take dietary supplements, some of which are useful while others are not.</li>
                            <li><b>The best bodybuilding supplements include:</b></li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Whey protein:</b> <br>Consuming whey protein powder is an easy and convenient way to increase your protein intake.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Creatine:</b> <br>Creatine provides your muscles with the energy needed to perform an additional rep or two. While there are many brands of creatine, look for creatine monohydrate as it’s the most effective.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Caffeine:</b> <br>Caffeine decreases fatigue and allows you to work harder. It’s found in pre-workout supplements, coffee or tea.</li>
                        </ul>
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
            <div class="vboderdivider"></div>
        </div>
        <div class="HdividerL"></div>  
           
    </section>
    <?php include "includes/footer.php" ?>


</body>

</html>