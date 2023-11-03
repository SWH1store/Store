<?php 
session_start();

include('includes/header.php');
  ?>

<div class="py-5">

    
    <div class="contaier">
        
        <div class="row justify-cotent-cent">
            <div class="col-md-12">
                <?php  if(isset($_SESSION['message']))
                {
                    ?>
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>يا هلا </strong> <?=$_SESSION['message']; ?>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   <?php
                }
                ?>
                <div class="card">
                    <div class="card-header">
                    <h4>تسجيل الدخول</h4>

                </div>
                <div class="card-baody">
 <form action="fuctios/authcode.php" method="POST">
   
    <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">رقم جوال</label>
               <input type="tel" class="form-control" required max="10" maxlength="12" name="phone">
    </div>
    <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
           <input type="password" re class="form-control" id="exampleInputPassword1" required  name="password">
    </div>

</div>
          <center>
          <button type="submit" name="login_btn" class="btn btn-primary">تسجيل الدخول</button>
          </center>
                         </form>
                        </div>
                    </div>
                    
        </div>
</div>

         </div>
         
        </div>

         
<?php include('includes/footer.php');  ?>