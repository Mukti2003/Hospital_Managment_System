//validation
//=======jquery for signup page======
function validAlfabets(){
let std_name=$("#std_name").val();
std_name=std_name.replace(/[^A-Za-z ]/g, '');
$("#std_name1").val()=std_name.toUpperCase();
// /g for global checking

if(std_name=='')
  {
  alert("Please Enter Name...");
  $("#std_name1").focus();
  return false;
  }
}

function checkValidateSignUP(){
  let std_name=$("#std_name").val();
  let std_email=$("#std_email").val();
  let std_pass=$("#std_pass").val();
  let std_password=$("#std_password").val();
  let dob=$("#dob").val();
  let phone=$("#Phone").val();
  let mail_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if(std_name==''){
    alert("Please Enter Name...");
    $("#std_name").focus();
    return false;
  }
  if(std_email==''){
    alert("Please Enter Email ID...");
    $("#std_email").focus();
    return false;
  } 
  if(!mail_regex.test(std_email)){
    alert("Please Enter Valid Email ID...");
    $("#std_email").focus();
    return false;
  } 
  if(std_pass==''){
    alert("Please Enter Password...");
    $("#std_pass").focus();
    return false;
  }
  if(std_dob==''){
    alert("Please Enter Password...");
    $("#std_pass").focus();
    return false;
  }
  if(std_phone==''){
    alert("Please Enter Password...");
    $("#std_pass").focus();
    return false;
  }
  if(std_pass1==''){
    alert("Please Enter Password...");
    $("#std_pass").focus();
    return false;
  }
}

//=======jquery for login page======

function checkValidatelogin(){
// let std_email=document.getElementById("std_email").value;
// let std_pass=document.getElementById("std_pass").value;
let std_email=$("#std_email1").val();
let std_pass=$("#std_pass1").val();
let mail_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zAZ0-9]{2,4})+$/;


if(std_email=='')
  { 
  alert("Please Enter Email....");
  $("#std_email1").focus();
  return false;
  }

if(!mail_regex.test(std_email))
  {
  alert("Please Enter Valid Email ID....");
  $("#std_email1").focus();
  return false;
  }

if(std_pass=="")
  {
  alert("Please Enter Password....");
  $("#std_pass1").focus();
  return false;
  }
}

//login
const formOpenBtn = document.querySelector("#form-open"),
  home = document.querySelector(".home"),
  formContainer = document.querySelector(".form_container"),
  formCloseBtn = document.querySelector(".form_close"),
  signupBtn = document.querySelector("#signup"),
  loginBtn = document.querySelector("#login"),
  pwShowHide = document.querySelectorAll(".pw_hide");
formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));
pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    if (getPwInput.type === "password") {
      getPwInput.type = "text";
      icon.classList.replace("fa-eye-slash", "fa-eye");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("fa-eye", "fa-eye-slash");
    }
  });
});
signupBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.remove("active");
});

//carosul
$(".carousel1").owlCarousel({
    margin: 40,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,//2000 ms=2 sec
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            699:{
                items:2,
                nav:false
            },
            996:{
                items:3,
                nav:false
            } 
            
        }
    });