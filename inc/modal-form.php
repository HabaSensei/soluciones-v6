
<style>
.login-form{
  width:350px;
  padding:40px 30px;
  background:#003452;
  @include border-radius(4px);
  margin:auto;
  position: absolute;
  left: 0;
  right: 0;
  top:50%;
  @include translateY(-50%);
}
.form-group{
  position: relative;
  margin-bottom:15px;
}
.form-control{
  width:100%;
  height:50px;
  border:none;
  padding:5px 7px 5px 15px;
  background:#fff;
  color:#666;
  border:2px solid #ddd;
  @include border-radius(4px);
    &:focus, &:focus + .fa{
      border-color:#10CE88;
      color:#10CE88;
    }
}
.form-group .fa{
  position: absolute;
  right:15px;
  top:17px;
  color:#999;
}
.log-status.wrong-entry {
 @include animation( wrong-log 0.3s);
}
.log-status.wrong-entry .form-control, .wrong-entry .form-control + .fa {
  border-color: #ed1c24;
  color: #ed1c24;
}
.log-btn{
  background:#0AC986;
  dispaly:inline-block;
  width:100%;
  font-size:16px;
  height:50px;
  color:#fff;
  text-decoration:none;
  border:none;
  @include border-radius(4px);
}

.link{
  text-decoration:none;
  color:#C6C6C6;
  float:right;
  font-size:12px;
  margin-bottom:15px;
  &:hover{
    text-decoration: underline;
    color:#8C918F;
  }
}
.alert{
  display:none;
  font-size:12px;
  color:#f00;
  float:left;
}
@include keyframes (wrong-log) {
  0%, 100% { left: 0px;}
  20% , 60%{left: 15px;}
  40% , 80%{left: -15px;}
}

.img-side-2 {
    left: 0px;
    bottom: 20px;
    width: 74px;
    position: relative;
}


</style>
   
        <div class="modal fade" style="    top: -418px;" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        
            <div class="login-form" align="center">
            <div><img class="img-side-2" style="" src="assets/img/favicon.png">  </div>
            <span style="font-size: 20px; color:white; font-weight: 600;  letter-spacing: 1px;" >Ingresa tus datos y te llamaremos </span><br><br>
     <div class="form-group ">
     <form  role="form" action="process/reg-user.php" method="post" >
                           
       <input type="text" class="form-control" placeholder="Nombre " name="name-us">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="text" class="form-control" placeholder="Telefono" name="tel-us">
       <i class="fa fa-mobile fa-3" style="    font-size: 28px;   top: 11px;"></i>
     </div>
      
      
     <button type="submit" class="log-btn" >Enviar</button>
</form>
    
   </div>
         </div>
             
        </div>
     </div>
  </div>




  