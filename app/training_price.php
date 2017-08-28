<?php include('header.php');?>
 <!-- Style for price table basic -->
 <style>
                @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic);

body {
 


  -webkit-font-smoothing: antialiased;
  -webkit-backface-visibility: hidden;

}

.pricing {
	text-align: center;
	border: 1px solid #f0f0f0;
	color: #777;
    font-size: 16px;
	padding-left: 0;
	margin-top: 40px;
    margin-bottom: 25px;
  /*font-family: 'Lato';*/
}

.pricing li:first-child,
.pricing li:last-child {
	padding: 20px 13px;
}
.pricing li {
	list-style: none;
	padding: 13px;
}
.pricing li + li {
	border-top: 1px solid #f0f0f0;
}
.pricing big {
	font-size: 32px;
}
.pricing h3 {
	margin-bottom: 0;
  font-size: 36px;
}
.pricing span {
	font-size: 12px;
	color: #999;
	font-weight: normal;
}
.pricing li:nth-last-child(2) {
	padding: 30px 13px;
}
.pricing button {
	width: auto;
	margin: auto;
	font-size: 15px;
	font-weight: bold;
	border-radius: 50px;
	color: #fff;
	padding: 9px 24px;
	background: #aaa;
	opacity: 1;
	transition: opacity .2s ease;
  border: none;
  outline: none;
}
.pricing button:hover {
	opacity: .9;
}
.pricing button:active {
	box-shadow: inset 0px 2px 2px rgba(0, 0, 0, 0.1);
}
/* pricing color */
.p-green big,
.p-green h3 {
	color: #4c7737;
}
.p-green button {
	background: #4c7737;
}
.p-yel big,
.p-yel h3 {
	color: #ffbb42;
}
.p-yel button {
	background: #ffbb42;
}
.p-red big,
.p-red h3 {
	color: #e13c4c;
}
.p-red button {
	background: #e13c4c;
}
.p-blue big,
.p-blue h3 {
	color: #3f4bb8;
}
.p-blue button {
	background: #3f4bb8;
}
h2{
    margin-top:25px;
    color: #3f4bb8;
    margin-bottom:0px;
    text-align:center;
    
}
p{
    margin-top: 25px;
    text-align:center;
    font-size:16px;
}
.block a{
    color:#FFFFFF;
}
</style>
<section id="price heading">
<div class="container">
  <div class="row">
  <div class="col-md-2">
 
  </div>
  <div class="col-md-8">
   
   <h2>TopStack Current Training Price List</h2>
   <p>TopStack offers cost-effective packages for industry based job oriented training</br>
    </p>
 
  </div>
  <div class="col-md-2">
 
  </div>
  
  </div>
  
  </div>

</section>


<section class="mysection">
                <section class="container">
                 <div class="row white">
				<div class="block">
                
					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing p-green">
								<li>
									<img src="http://bread.pp.ua/n/settings_g.svg" alt="">
									<big>PHP/MySql</big>
								</li>
								<li>Approx. 90 hours</li>
								<li>Taught by Industry Pros</li>
								<li>Student Support Community </li>
								
                                <li>Webhosting Technique</li>
                                <li>Live Project</li>
                                <li>Basic Programming Concept</li>
								<li>
									<h3> ₹ 5,500</h3>
									<span>*for individual</span>
								</li>
								<li>
									<button onclick="window.location.href='login.php'" >Join Now</button>
								</li>
							</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing p-yel">
								<li>
									<img src="http://bread.pp.ua/n/settings_y.svg" alt="">
									<big>Android</big>
								</li>
                                <li>Approx. 90 hours</li>
                                <li>Taught by Industry Pros </li>
								<li>Rich Learning Content</li>
								
								<li>Student Support Community </li>
                                <li>Live Project</li>
                                <li>Knowledge of Core Java</li>
								<li>
									<h3> ₹ 8,500</h3>
									<span>* for individual.</span>
								</li>
								<li>
									<button onclick="window.location.href='login.php'">Join Now</button>
								</li>
							</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing p-red">
								<li>
									<img src="http://bread.pp.ua/n/settings_r.svg" alt="">
									<big>IoT Certification</big>
								</li>
								<li>Approx. 90 hours</li>
								<li>Taught by Industry Pros</li>
								<li>Arduino & Rasbery Pi</li>
                                <li>Internet Connected Sensors</li>
                                <li>Hands On Experience</li>
                                <li>Knowledge of C Programming</li>
								<li>
									<h3> ₹ 10,500</h3>
                                    <span>* for individual.</span>
								</li>
								<li>
                                <button onclick="window.location.href='login.php'">Join Now</button>
								</li>
							</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing p-blue">
								<li>
									<img src="http://bread.pp.ua/n/settings_b.svg" alt="">
									<big>Desktop App</big>
								</li>
								<li>Approx. 90 hours</li>
								<li>Taught by Industry Pros</li>
								<li>Rich Learning Content</li>
                                <li>Student Support Community</li>
                                <li>Live Project</li>
                                <li>Knowledge of Core Java or C#</li>
								<li>
									<h3> ₹ 10,500</h3>
                                    <span>* for individual.</span>
								</li>
								<li>
                                <button onclick="window.location.href='login.php'">Join Now</button>
								</li>
							</ul>
					</div>


				</div><!-- /block -->
			</div><!-- /row -->
  </section>


</section>
<?php include('footer.php');?>