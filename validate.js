function Validate()                                    
{ 
    //DECLARING VARIABLES CONTAINED IN THE FORM
    var FirstName = document.forms["register_user"]["FirstName"]; 
    var LastName = document.forms["register_user"]["LastName"]; 
    //var UserName = document.forms["register_user"]["UserName"]; 
    var Phone_number = document.forms["register_user"]["Phone_number"];
    var Institution = document.forms["register_user"]["Institution"];              
    var RegNo = document.forms["register_user"]["RegNo"];    
    var Faculty = document.forms["register_user"]["Faculty"];  
    var Email =  document.forms["register_user"]["Email"];  
    var Password = document.forms["register_user"]["Password"];  
    var ConfirmPassword = document.forms["register_user"]["ConfirmPassword"];  

    //VALIDATING THE DATA ENTERED BY THE USER
   
    if (FirstName.value == "")                                  
    { 
        window.alert("Please enter your First Name."); 
        FirstName.focus(); 
        return false; 
    } 
     if (LastName.value == "")                                  
    { 
        window.alert("Please enter your Last  Name."); 
        LastName.focus(); 
        return false; 
    } 
    /* if (UserName.value == "")                                  
    { 
        window.alert("Your UserName is:"); 
        UserName.focus(); 
        return false; 
    } */
    if (Phone_number.value=="") {
        window.alert("Please Enter Your Contact in the form +254");
        Phone_number.focus();
        return false;
    }
    if (Institution.value == "")                                  
    { 
        window.alert("Write the Name of your School"); 
        Institution.focus(); 
        return false; 
    }  
    
if (RegNo.value == "")                                  
    { 
        window.alert("Enter Your Registration Number"); 
        RegNo.focus(); 
        return false; 
    } 
    if (Faculty.value == "")                                  
    { 
        window.alert("Write the Name of your Faculty"); 
        Faculty.focus(); 
        return false; 
    } 

    if (Email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        Email.focus(); 
        return false; 
    } 
   
    if (Email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        Email.focus(); 
        return false; 
    } 
   
    if (Email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        Email.focus(); 
        return false; 
    } 
    
    if (Password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        Password.focus(); 
        return false; 
    } 

    if (Password.value != ConfirmPassword.value)                                  
    { 
        window.alert("Passwords do not match!."); 
       
        return false; 
    } 
   
   /* if (what.selectedIndex < 1)                  
    { 
        alert("Please select your course."); 
        what.focus(); 
        return false; 
    } */
   
    alert("Saved successfully!!") 
}
  
