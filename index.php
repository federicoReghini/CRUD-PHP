<!-- <?php
 include 'crud/connect.php';
   
 if(isset($_POST['submit'])){
     include 'crud/create.php';
 }

?> -->
        <nav id="nav">

            <div id="flex">
            <h1 class="text-light ml-1"><i class="fas fa-greater-than-equal"></i>Create User</h1>

                <div>
                <a href="display.php" id="User"><i class="fas fa-user"></i></a> 
                <a href="search.php" id="looking"><i class="fas fa-search"></i></a> 
                </div>
            </div>

        </nav>
        <?php include('parts/form.php') ?>

       
            <div>
                <button id="neon" type="submit" name="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>



