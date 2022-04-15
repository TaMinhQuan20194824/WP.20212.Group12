<html>
    <head>
        <title>
            A Simple Form
        </title>
    </head>
    <body>
        <form action="http://fit.hut.edu.vn/~trangntt/courses/wp"
              method=POST>
            <h1>Registration form!!</h1>
            <br>
            <input type="text" name="Email"> Email
            <br>
            <input type="password" name="password" size="15" maxlength="20" name="password"> Password
            <br>
            Do you have any other email?
            <input type="radio" name="contact" value="yes" checked="checked"> Yes
            <input type="radio" name="contact" value="no"> No
            <br>
            How many emails do you have?
            <input type="checkbox" name="one" value="yes" checked="checked"> 1
            <input type="checkbox" name="two" value="yes"> 2
            <input type="checkbox" name="three" value="yes"> 3
            <input type="checkbox" name="more" value="yes"> More than 3
            <br>
            How many phone number do you have?
            <input type="checkbox" name="phone" value="one" checked="checked"> One?
            <input type="checkbox" name="phone" value="two"> Two
            <input type="checkbox" name="phone" value="three"> Three
            <input type="checkbox" name="phone" value="None"> None of the above?
            <br>
            What is your purpose to create an email?
            <select name="purpose" size=2 Multiple>
                <option>For business</option>
                <option selected>For personal purposes</option>
                <option>For my school</option>
            </select>
            <br>
            Any other comments?
            <textarea name="Comments" rows="10" cols="50"> Your comments here </textarea>
            <br>    
            
            <input type="submit" value="Click To Submit"> 
            <input type="reset" value="Erase and Restart">
        </form>
    </body>
</html>