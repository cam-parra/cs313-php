<!doctype html>
<html lang="en">
    <body>
        <form action="form.php" id="usrform" method="post">
            name: <input name="name" type="text" value=""/>
            <br/>
            email: <input name="email" type="text" value=""/>
            <br/>
            major: <br/>
            <input name="major" type="radio" value="CS"/>Computer Science <br/>
            <input name="major" type="radio" value="WDD"/>Web Design and Development <br/>
            <input name="major" type="radio" value="CIT"/>Computer information Technology<br/>
            <input name="major" type="radio" value="CE"/>Computer Engineering <br/>
            <?php  require 'form2.php';?>
            <input name="" type="submit" value="Submit"/>
        </form>

        <textarea cols="30" form="usrform" name="comment" rows="10"></textarea>
    </body>
</html>
