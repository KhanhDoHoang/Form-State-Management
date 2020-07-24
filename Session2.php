
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
                <form method="post" >
                <fieldset>
                    <legend>Employee Information</legend>
                    <?php
                        session_start();
                        echo "Name: ".$_SESSION["name"]."<br>";
                        echo "ID: ".$_SESSION["ID"]."<br>";
                        echo "Number: ".$_SESSION["num"]."<br>";
                        echo "Email: ".$_SESSION["email"]."<br>";
                        echo "Role: ".$_SESSION["role"]."<br>";
                        echo "Project: ".$_SESSION["projectA"]."&nbsp;&nbsp;".$_SESSION["projectB"].
                        "&nbsp;&nbsp;".$_SESSION["projectC"]."&nbsp;&nbsp;".$_SESSION["projectD"];
                    ?>
                </form>
                </div>
        </div>
        <?php 
			include_once "Footer.php";
        ?>
	</body>
</html>

