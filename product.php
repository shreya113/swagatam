<?php include'C:\xampp\htdocs\WEBSITE-2\inc\header.php'; ?>
  <head></head>
   <style>
       @media 768px
       {
.flex{
    display: flex;
    width: 1;
       }
       }</style>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <br>
<section class="flexbox">
    <div class="container">
        <div class="flex">
            <img src="img/images/tom&jerry.jpg" alt="#" width="250px" height="250px">
            <img src="img/images/budday.jpg" alt="#" width="250px" height="250px">
            <img src="img/images/tom&jerry.jpg" alt="#" width="250px" height="250px">
            <img src="img/images/hbd2.jpg" alt="#" width="250px" height="250px">
        </div>
    </div>
</section>





<!-- main start-->
    <section class="home_tips padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="home_tips_text text-center">
                        <h1>Magical T-SHIRTS</h1>
                    </div>
                    
               <video width="640" height="480" controls>
  <source src="videos/tshirt%2011.mp4" type="video/mp4">
  <source src="videos/tshirt%2011.mp4" type="video/ogg">
Your browser does not support the video tag.
</video>
               <video width="640" height="480" controls>
  <source src="videos/tshirt%2022.mp4" type="video/mp4">
  <source src="videos/tshirt%2022.mp4" type="video/ogg">
Your browser does not support the video tag.
</video>
                </div>
            </div>
        </div>   
</section>
       
    <br><br>
    
    <section class="home_tips padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="home_tips_text text-center">
                        <h1>Magical ALBUM</h1>
                    </div>
                    
               <video width="640" height="480" controls>
  <source src="videos/photo%20album.mp4" type="video/mp4">
  <source src="videos/photo%20album.mp4" type="video/ogg">
Your browser does not support the video tag.
</video>
                </div>
            </div>
        </div>
    </section>
   <br><br>
   
   <section class="home_tips padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="home_tips_text text-center">
                        <h1>Invitation Cards</h1>
                        <p>Confused about selecting a venue for your event, the decorations, the caterers or the music?  
Don’t worry we provide you everything here! 
We at SWAGATAM help our customers to convert the imagination of their decor ideas into reality. We assist our clients in planning their events and smooth execution of it as well. We take care that our clients are stress free throughout the event and work according to the needs of our clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
<section class="home_tips padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="home_tips_text text-center">
                        <h1>Key Rings</h1>
                        <p>Confused about selecting a venue for your event, the decorations, the caterers or the music?  
Don’t worry we provide you everything here! 
We at SWAGATAM help our customers to convert the imagination of their decor ideas into reality. We assist our clients in planning their events and smooth execution of it as well. We take care that our clients are stress free throughout the event and work according to the needs of our clients.
                        </p>
                    </div>
                    <img src="img/images/coming-so.jpg" alt="Coming Soon" width="325px" height="250px" style="margin-left:30%">
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br>
    <br><br>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:41%">
    <h3 style="padding: 10px">Book Your Product</h3>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Book Your Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="productformsubmit.php" method="POST">
      <div class="modal-body">
          <input type="text" id="name" name="name" pattern="[A-Za-z_]{1,75}" placeholder="Your name seperated by underscore .." required>
       <!-- <input type="text" name="name" id="name" class="input-text" placeholder="Enter Full Name" required>-->
              <br>
              <br>
          <input type="email" id="email" name="email" placeholder="Your email.." required>
        <!--<input type="email" name="email" id="email" class="input-text" placeholder="Enter Email Address" required>-->
              <br><br>
          <input type="text" name="mobile" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" placeholder="Mobile number.." required>
        <!--<input type="number" name="number" id="number" class="input-text" placeholder="Enter Mobile Number" required>-->
              <br><br>
        <input list="productname" name="productname" placeholder="Enter Product Name" required>
  <datalist id="productname">
    <option value="Magical T-Shirt">
    <option value="Magical Album">
    <option value="Invitation Card">
    <option value="Keyrings">
  </datalist>
         <br><br>
        <input type="number" name="quantity" id="quantity" class="input-text" placeholder="Enter Quantity" required>      
      </div>
      <div class="modal-footer">
                     <input type="submit" name="SignUp" value="Submit">
        </div>
        </form>
      </div>
    </div>
  </div>
<br><br>

<?php include 'C:\xampp\htdocs\WEBSITE-2\inc\footer.php'; ?>