<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                padding: 0;
                margin: 0;
                font-style:Monospace ;
                color: white;
                background:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.5)), url(img/auto-loan-footer.jpg) ;
                background-size: cover;
            }
            input[type=submit],input[type=reset]{
                padding-right: 40px;
                border-radius: 10px 10px 0px 10px;
                padding-left: 25px;
                border:  2px solid white;
                background-color: skyblue;
                color: white;
                opacity: 1;
            }
            input[type=submit],input[type=reset]{
                padding-right: 40px; 
                padding-left: 25px;
                background-color: skyblue;
                color: white;
                transition: 0.8s;
                opacity: 1;
            }
            input[type=submit]:hover,input[type=reset]:hover{
                padding-left: 40px; 
                padding-right: 25px;
                background-color: royalblue;
                border-radius: 0px 10px 10px 10px;
                box-shadow: 1px 1px 200px white, 0 0 25px yellow, 0 0 5px white;
                text-shadow: 1px 1px 200px white, 0 0 25px yellow, 0 0 5px white;
                transition: 0.8s;
                opacity: 1;
            }
            input, textArea, select{
                padding: 7px;
                border-radius: 0px 10px 10px 10px;
                border: transparent;
                opacity: 0.7;
            }
            input:hover, textArea:hover, select:hover{
                opacity: 1;
            }
            input:focus, textArea:focus, select:focus, input:checked{
                opacity: 1;
                box-shadow: 1px 1px 200px white, 0 0 25px white, 0 0 5px white;
            }
            div.background {
              background:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.5)), url(img/auto-loan-footer.jpg) ;
              background-size: cover;
            }            
            div.transbox {
                background-color: whitesmoke;
                border: 1px solid black;
                opacity: 0.6;
                filter: alpha(opacity=60);
                
                
            }
            div.transbox h1{
                margin: 4%;
                font-weight: bold;
                color: black;
                font-size: 80px;
                /*text-shadow:inset 3px 4px 5px white;*/
                background-color: #565656;
                color: transparent;
                text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
                -webkit-background-clip: text;
                -moz-background-clip: text;
                 background-clip: text;
            }
            
        </style>
    </head>
    <body>
        <div class="background">
        <header>
            <div class="background">
                <div class="transbox">
                    <h1>LOAN APPLY</h1>
                </div>
            </div>
        </header>
        <form action="Loan_Agreement.php" method="POST" enctype="multipart/form-data">
            <table style="margin: auto;padding: 49px;" border="0">
                <tbody>
                    <tr>
                        <td>customer name:</td>
                        <td><input type="text" name="name" placeholder="Fname Mname Lname" title="name"/></td>
                    </tr>
                    <tr>
                        <td>address:</td>
                        <td><textarea name="address" rows="4" cols="20" placeholder="address" ></textarea></td>
                    </tr>
                    <tr>
                        <td>gender:</td>
                        <td>
                            <input type="radio" name="gender" value="Male" checked="checked" title="Male" required="required"/>Male
                            <input type="radio" name="gender" value="Female" title="Female"/>Female
                        </td>
                    </tr>
                    <tr>
                        <td>email:</td>
                        <td><input type="email" name="email" placeholder="email" title="email"/></td>
                    </tr>
                    <tr>
                        <td>phone no:</td>
                        <td><input type="tel" minlength="10" maxlength="10" name="phone" placeholder="phone no" title="phone no"/></td>
                    </tr>
                    <tr>
                        <td>Pan card:</td>
                        <td><input type="number" minlength="12" maxlength="12" name="pan" placeholder="pan card no" title="pan card no"/></td>
                    </tr>
                    <tr>
                        <td>aadhar no:</td>
                        <td><input type="number" minlength="12" maxlength="12" name="aadhar" placeholder="aadhar card no" title="aadhar card no"/></td>
                    </tr>
                    <tr>
                        <td>file KYC: </td>
                        <td><input type="file" name="doc[]"  title="Files: Pan card(.jpg, .png), Adhaar card(.jpg, .png), Salary slip(.pdf)." multiple="multiple"/><p style="font-size: 12px;color:gray;">[Files: Pan card(.jpg, .png), Adhaar card(.jpg, .png), Salary slip(.pdf).]</p></td>
                    </tr>
                    <tr>
                        <td>type of loan:</td>
                        <td><select name="loan_type" >
                                <option>Student Loan</option>
                                <option>Car Loan</option>
                                <option>Home Loan</option>
                                <option>Gold Loan</option>
                                <option>Business Loan</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="margin: auto;" >
                        <table style=" margin: auto;vertical-align: middle;" cellpadding="10px" >
                            <tr >
                                <td><input type="submit" value="submit" name="submit" /></td>
                                <td><input type="reset" value="reset" name="reset" /></td>                    
                            </tr>
                        </table>
                        </td>        
                    </tr>
                </tbody>
            </table>
        </form>
        </div>
    </body>
</html>
