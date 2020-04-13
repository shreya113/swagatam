<?php include'C:\xampp\htdocs\WEBSITE-2\inc\header.php'; ?>
   <head>
       <style>


input[type=text],input[type=number],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
         
.all
 {
    margin-left: 30%;
    background-color: #f2f2f2;
    margin-right: 30%;
}
</style>
   </head>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <br>
    <!--main body starts-->
   <div class="all"> 
  <form action="contactformsubmit.php" method="POST"style="padding: 5%">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" pattern="[A-Za-z_]{1,75}" placeholder="Your name seperated by underscore .." required>
    <br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>
    <br>
    <label for="number">Mobile Number</label>
      <input type="text" name="mobile" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" placeholder="Mobile number.." required>
    <br>
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style=" height:200px"></textarea>
    <br>
      <input type="submit" id="submit" name="submit" value="Submit">
  </form>
</div>
    <!--main body ends-->
    <br>
<?php include 'C:\xampp\htdocs\WEBSITE-2\inc\footer.php'; ?>
