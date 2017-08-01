(function(){

// Initialize Firebase
    // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBAtfY5TGJ4oDZFPf4fxn_hrRZUhvjkGu4",
    authDomain: "topstack-a348a.firebaseapp.com",
    databaseURL: "https://topstack-a348a.firebaseio.com",
    projectId: "topstack-a348a",
    storageBucket: "topstack-a348a.appspot.com",
    messagingSenderId: "117973782055"
  };
  firebase.initializeApp(config);
//Get html login form elements

const txtEmail=document.getElementById('username');
const txtPassword= document.getElementById('password');
const btnLogin = document.getElementById('btnLogin');
const btnLogout = document.getElementById('btnLogout');
//const btnsignup = document.getElementById('signup');

//add login event
btnLogin.addEventListener("click",e => {

  //get email and pass
  // TODO: check 4 real email
  const email=txtEmail.value;
  const password= txtPassword.value;
  const auth= firebase.auth();
  //sign in

  const promise=auth.signInWithEmailAndPassword(email,password);
  promise.catch(e =>console.log(e.message));
});
// logout button click
btnLogout.addEventListener("click",e => {
  firebase.auth().signOut();
})

//Add a real time listner
 firebase.auth().onAuthStateChanged(firebaseUser => {
   if(firebaseUser) {
     console.log(firebaseUser);
     btnLogout.classList.remove('hide');  // remove hide section to vissible
     document.getElementById('user_email').textContent=firebaseUser.email;
   }else{
     console.log('Not Logged in ');
     btnLogout.classList.add('hide');   //add hide button
     document.getElementById('user_email').textContent='User Email Here';
   }
 })

}());