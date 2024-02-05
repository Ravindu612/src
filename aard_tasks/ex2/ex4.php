<?php include 'header.php'; ?>
        <div class="section text-left">
            <div class="row">
                <div class="textOnVideo col">
                <h3>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she 
                        is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h3><br>
                
                        <form name="bootstrapForm" class="mt-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group" >
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>

                            </div>
                            <div class="form-group" >
                                <label for="age" class="form-label">Age</label>
                                <input type="number" name="age" class="form-control" required>

                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        <div>
                                    <?php
                                        if (isset($_POST['name']) && isset($_POST['age'])) {
                                            $name = $_POST['name'];
                                            $age = $_POST['age'];
                
                                            if ($age >= 18) {
                                                echo "<h4>Congratulations, {$name}! You are eligible for voting.</h4>";
                                            } else {
                                                echo "<h4>Sorry, {$name}. You are not yet eligible for voting. You must be at least 18 years old to vote.</h4>";
                                            }
                                        }
                                    ?>
                        </div>
            
        </div>

<?php include 'footer.php'; ?>    