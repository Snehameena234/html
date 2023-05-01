<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    
</head>
<body>
<style>
body{
    background-color:white;
    font-family: 'josefin Sans',sans-serif;
}
.radio-inline{
    margin: 20px 40px 20px 0px;
    cursor: pointer;
}

label{
    color: black;
}

#text{
    height: 40px;
    border-radius: 5px;
    padding-left: 10px;
    font-size: 14px;
    border:black;
    width: 100%;
    color: black;
}

#message{
    outline:none;
    border:none;
    padding: 10px 0px 0px 15px;
    font-size: 16px;
    color: black;
    border: 5px;
    width: 100%;
}
</style>

<div class=" container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          
         <h1 class="text-center mt-5 font-weight-bold">Feedback</h1>   
         <hr class="bg-white">
         <h6 class="text-center">Please write your feedback below:</h6>
         <h3 class="mt-4">How do you rate your overall experience?</h3>
        <form>
              <label class="radio-incline"><input type ="radio" name="experience" value="bad">Bad</label>
              <label class="radio-incline"><input type ="radio" name="experience" value="bad">Average</label>
              <label class="radio-incline"><input type ="radio" name="experience" value="bad">Good</label>
        
        </div>
        </div>   
        
        <div class="row">
            <div class="col-md-2"></div>
            <label class="col-md-4">Full Name*<br>
                <input type="text" id="text" required="" placeholder="Riya agarwal"></label>

            <label class="col-md-4">Email*<br>
                <input type="text" id="text" required="" placeholder="riya123@gmail.com"></label>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <label class="col-md-4">Age*<br>
                <input type="number" id="text" required="" placeholder="18"></label>

                <label class="col-md-4">Phone*<br>
                    <input type="number" id="text" required="" placeholder="9810624433"></label>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <label class="col-md-8">Message<br>
                <input type="text" id="text" required="" placeholder="Write your Message here" cols="48" rows="5"></textarea></label>
        </div>
               <div class="row">
                <div class="col-md-2"></div>
                <button class="btn btn-primary" style=" width:53.5%;position: absolute;margin-left: 15%;">Submit</button>
               </div> 
            </form>
       
     
</div>



</body>
</html>