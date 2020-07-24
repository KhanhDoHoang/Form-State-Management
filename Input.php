
<html>
	<head>
		<title>Currency</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
        <?php   
            include_once "Header.php";
            include_once "Menu.php";
        ?>
        <div style="margin-top: 4rem"></div>
        <div style="margin-top: 4rem"></div>
        
        <div class="row">
            <div class="column" style="background-color:#aaa;">
            <form method="POST">
            <fieldset>
                <legend>Information</legend>
                <label> Employee Name: </label>
                <input type="text" name="name"/>
            
                <label> Employee ID: </label>
                <input type="text" name="ID"/>

                <label> Employee Number: </label>
                <input type="number" name="num"/>

                <label> Email Address: </label>
                <input type="text" name="email"/>

                <p>Role:</p>
                <input type="radio" id="Manager" name="role" value="Manager">
                <label for="Manager">Manager</label><br>
                <input type="radio" id="Teamlead" name="role" value="Teamlead">
                <label for="Teamlead">Team Lead</label><br>
                <input type="radio" id="ITDeveloper" name="role" value="ITDeveloper">
                <label for="ITDeveloper">IT Developer</label><br>
                <input type="radio" id="analyst" name="role" value="analyst">
                <label for="analyst">IT Analyst</label><br><br>
                <p>Project</p>
                <input type='checkbox' name='projectA' value='projectA' checked> Project A<br>
                <input type='checkbox' name='projectB' value='projectB' > Project B<br>
                <input type='checkbox' name='projectC' value='projectC' > Project C<br>
                <input type='checkbox' name='projectD' value='projectD'> Project D<br>

                </select>
               </select>
               <input type="submit" value="Submit information!">
            </form>
            </div>

            <div class="column" style="background-color:#bbb;">
                <form method="GET" action="process.php">
                <fieldset>
                    <legend>Employee Information</legend>
                    <?php
                        if(isset($_POST["name"]))
                        $Name = $_POST["name"];
                        else
                            $Name = "";
                        //---------------------------------------------//
                        if(isset($_POST["ID"]))
                            $ID = $_POST["ID"];
                        else
                            $ID = "";
                        //--------------------------------------------//
                        if(isset($_POST["num"]))
                            $num = $_POST["num"];
                        else
                            $num = "";
                        //--------------------------------------------//
                        if(isset($_POST["email"]))
                            $email = $_POST["email"];
                        else
                            $email = "";
                        //--------------------------------------------//
                        if(isset($_POST["role"]))
                            $role = $_POST["role"];
                        else
                            $role = "";
                        //-------------------------------------------//
                        if(isset($_POST["projectA"]))
                            $projectA = $_POST["projectA"];
                        else
                            $projectA = "";
                        //--------------------------------------------//
                        if(isset($_POST["projectB"]))
                            $projectB = $_POST["projectB"];
                        else
                            $projectB = "";
                        //--------------------------------------------//
                        if(isset($_POST["projectC"]))
                            $projectC = $_POST["projectC"];
                        else
                            $projectC = "";
                        //--------------------------------------------//
                        if(isset($_POST["projectD"]))
                            $projectD = $_POST["projectD"];
                        else
                            $projectD = "";
                        
                        //------
                        echo "Name: ".$Name."<br>";
                        echo "ID: ".$ID."<br>";
                        echo "Number: ".$num."<br>";
                        echo "Email: ".$email."<br>";
                        echo "Role: ".$role."<br>";
                        echo "Project: ".$projectA."&nbsp;&nbsp;".$projectB."&nbsp;&nbsp;".$projectC."&nbsp;&nbsp;".$projectD;
                    ?>
                    <!-- Name: $Name <br>
                    ID: $ID <br>
                    Number: $num <br>
                    Email: $email <br>
                    Role:  $role <br>
                    Project:  -->
                </form>
                </div>
        </div>
        <?php 
			include_once "Footer.php";
        ?>
	</body>
</html>

