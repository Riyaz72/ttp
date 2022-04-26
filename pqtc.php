<?php
  require_once('header.php');
  $activePage = "Services";
?>
<link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/light-gallery.css">
<style>
    #about .about-content ul {
        list-style: disc;
        padding: revert;
    }
    #about .about-content ul li {
        padding-bottom: 4px;
    }
    #about .about-content ul li i {
        font-size: inherit;
        padding-right: 4px;
        color: unset;
    }
    .box {    
        padding: 20px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin: 0 10px 40px 10px;        
        box-shadow: 0 10px 29px 0 rgb(68 88 144 / 10%);
        transition: all 0.3s ease-in-out;
        /* text-align: center; */
    }
</style>
<section id="main-section" class="clearfix">
	<div class="container-fluid pt-5">
<!-- Body Section -->

     <!-- ======= About Section ======= style="background: #37517e;"-->
     <section id="about" class="about privacy-policy" >

<div class="container" data-aos="fade-up">
  <div class="row">          

    <div class="col-lg-12 col-md-12" >
        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
        <h2><b>TheTestingPro<sup>TM</sup></b> ART p-Quick Test Centre (p-QTC)  </h2>    
            <p>
                To support the nation’s Covid-19 testing efforts, along with our aim to make available 
                conveniently located and safe testing facilities to persons requiring Antigen Rapid Test 
                (ART), we have set up p-QTCs at the locations below.
            </p>
            <p>
                <h4>Our ART p-Quick Test Centres Offer The Following Type of Tests:</h4>
                <ul>
                    <li>FET Rostered Routine Test (RRT)</li>
                    <li>Pre-Event Test (PET)</li>
                    <li>Pre-Departure Test (PDT)* <span class="text-muted"><small><i>At selected sites and by appointment only</i></small><span></li>
                    <li>Voluntary Test</li>
                </ul> 
                <div class="text-center"><b>For enquiries, please email to <a href="mailto:pqtc@thetestingpro.com">pqtc@thetestingpro.com </a> </b></div>  
                <div class="row mt-4 box form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center"><b>Appointment Bookings</b></h4> <br>                           
                        <ul class="form-group fa-ul" style="list-style:none">
                            <li><span class="fa-li"><i class="fa fa-link"></i></span><P><b><u>Supervised Self ART</u> </b> for Pre-Event Test (PET) / Voluntary Test, please <a href="https://go.gov.sg/pay-covid-19-test"><b>BOOK HERE</b></a></P> </li>    
                            <li><span class="fa-li"><i class="fa fa-link"></i></span><b><u>Administered ART</u> </b> for Pre-Departure Test (PDT), please  <a href="book-artpdt.php"><b>BOOK HERE</b></a> </li>
                        </ul>
                    </div>
                </div>
            </p>
        </div>
    </div>
    <div class="col-sm-12">
        <h4 class=""><strong>Our Test Centres</strong></h4>  
        <div class="table-responsive">
        <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Test Center</th>
                                <th>Address</th>
                                <th>Operating Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td>Pasir Panjang Wholesale Centre <br> (Auction Hall) <br> <span class="text-danger"><i>All ART services available</i></span></td>
                                <td>1 Wholesale Centre <br>Singapore 110001</td>
                                <td><b>Monday to Wednesday only </b><br><tt>8am to 12pm</tt></td>
                            </tr> -->
                            <!-- <tr>
                                <td>Jurong Fishery Port<br> (Canteen)<br> <span class="text-danger"><i>Not open to public</i></span> </td>
                                <td>35 Fishery Port Road<br>Singapore 619742</td>
                                <td><b>Tuesday and Friday only </b><br><tt>8:30am to 11:30am</tt></td>
                            </tr> -->
                            <tr>
                                <td>Canopy @ J-Link <br> (Event Hall) <br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>134 Jurong Gate Way Road<br>Singapore 600134 <br> (Behind JCube / Jurong East Central)</td>
                                <td><b>Monday to Sunday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> </td>
                            </tr>
                            <!-- <tr>
                                <td>Blk 535 Choa Chu Kang St 51 <br>(Void Deck)<br> <span class="text-danger"><i>Supervised Self-Administered ART only</i></span></td>
                                <td>535 Choa Chu Kang Street 51<br>Singapore 680535 <br> (Limbang)</td>
                                <td><b>Monday to Saturday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> <b>Sunday</b> <br> CLOSED </tt></td>
                            </tr> -->
                            <!-- <tr>
                                <td>Blk 60A Circuit Road   <br>(Event Hall)<br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>60A Circuit Road<br>Singapore 370060 </td>
                                <td><b>Monday to Sunday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> </tt></td>
                            </tr> -->
                            <!-- <tr>
                                <td>Blk 108 Yishun Ring Rd    <br>(Void Deck)<br> <span class="text-danger"><i>Supervised Self-Administered ART only</i></span></td>
                                <td>108 Yishun Ring Road<br>Singapore 760108 <br> (Chong Pang City)</td>
                                <td><b>Monday to Saturday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> <b>Sunday</b> <br> CLOSED </tt></td>
                            </tr> -->
                            <tr>
                                <td>Blk 17 Marsiling Lane   <br>(Void -Deck) <br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>17 Marsiling Lane<br>Singapore 730017 <br> (Marsiling Market)</td>
                                <td><b>Monday to Sunday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br></tt></td>
                            </tr>
                            <tr>
                                <td>Blk 234A Bt Panjang Ring Rd    <br>(Event Hall) <br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>234A Bukit Panjang Ring Road<br>Singapore 671234</td>
                                <td><b>Monday to Sunday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> </tt></td>
                            </tr>
                          <!--  <tr>
                                <td>Blk 75A Whampoa Drive    <br>(Event Hall) <br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>75A Whampoa Drive<br>Singapore 321075</td>
                                <td><b>Monday to Sunday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> </tt></td>
                            </tr> -->
                            <tr>
                                <td>Blk 17 Ghim Moh Rd  <br>(Void Deck) <br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>17 Ghim Moh Road<br>Singapore 270017</td>
                                <td><b>Monday to Sunday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> </tt></td>
                            </tr>
                            <tr>
                                <td>Grand Mercure Roxy SG  <br>(Level 4) <br> <span class="text-danger"><i>PCR and All ART services available</i></span></td>
                                <td>50 East Coast Road<br>Roxy Square Marine Parade Rd<br>Singapore 428769</td>
                                <td><b>Monday to Sunday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> </tt></td>
                            </tr>
                            <tr>
                                <td>Clarke Quay Central <br>(Ground Floor Common Walkway –<br> Waterfront Entrance) <br> <span class="text-danger"><i>PCR and All ART services available</i></span></td>
                                <td>6 Eu Tong Sen Street<br>Clarke Quay Central<br>Singapore 059817</td>
                                <td><b>Monday to Sunday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> </tt></td>
                            </tr>
                            <tr>
                                <td>Ibis Singapore on Bencoolen<br>(Main Lobby Driveway)<br>
                                <span class="text-danger"><i>PCR and All ART services available</i></span></td>
                                <td>170 Bencoolen Street<br> Singapore 189657</td>
                                <td><b>Monday to Sunday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> </tt></td>
                            </tr>
                        </tbody>
                    </table>
                    <small><em>Above listing correct as at 24 Jan 2022</em></small>
        </div>
    </div>
    <div class="col-sm-12 mt-3">
        
        <p class="text-center font-weight-bold">
            All our test centres are licensed by the Ministry of Health (MOH) Singapore to conduct both administered 
            and supervised Antigen Rapid Test (ART).<br>
            <a href="https://www.moh.gov.sg/covid-19/quick-test-centres-(qtcs)">https://www.moh.gov.sg/covid-19/quick-test-centres-(qtcs)</a> 
        </p>

        <div class="row mt-4 box form-group">
            <div class="col-sm-12">
                <h4 class="text-center"><b>Appointment Bookings</b></h4> <br>                           
                <ul class="form-group fa-ul" style="list-style:none">
                    <li><span class="fa-li"><i class="fa fa-link"></i></span><P><b><u>Supervised Self ART</u> </b> for Pre-Event Test (PET) / Voluntary Test, please <a href="https://go.gov.sg/pay-covid-19-test"><b>BOOK HERE</b></a></P> </li>    
                    <li><span class="fa-li"><i class="fa fa-link"></i></span><b><u>Administered ART</u> </b> for Pre-Departure Test (PDT), please  <a href="book-artpdt.php"><b>BOOK HERE</b></a> </li>
                </ul>
            </div>
        </div>

        <h5 class="text-danger text-center">Important Notice for Pre-Departure Test (PDT)</h5>
        <div class="text-center font-weight-bold">
            Please be reminded that TheTestingPro is only responsible for administering the ART and providing 
            the notarised digital health certificate of test results. It is the client’s responsibility to 
            find out in advance the specific Pre-Departure Test (PDT) requirements and test validity before 
            taking any such tests at our test centres.
        <br><br>
               For enquiries, please email to <a href="mailto:pqtc@thetestingpro.com">pqtc@thetestingpro.com</a>
            
        </div>
        <!-- <div class="row mt-3 box">
            <div class="col-sm-9 pt-2">
                <h5 class="text-center m-0">BOOK AN APPOINTMENT FOR YOUR ANTIGEN RAPID TEST (ART)</h5>
            </div>
            <div class="col-sm-3">
                
                    <a href="book-artpdt.php" class="btn btn-info btn-block">Book Now <i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
                
            </div>
            
        </div> -->
        <h3 class="mt-5 text-center">Our p-Quick Test Centres</h3>
        <div class="demo-gallery p-5 table-success">
                <ul id="lightgallery" class="list-unstyled row mt-3">
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_CCK1.jpg" data-src="assets/img/gallery/pQTC_CCK1.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_CCK1.jpg">
                        </a>
                    </li>
                   <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_CCK2.jpg" data-src="assets/img/gallery/pQTC_CCK2.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_CCK2.jpg">
                        </a>
                    </li>
                     <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_CCK3.jpg" data-src="assets/img/gallery/pQTC_CCK3.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_CCK3.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_JEC1.jpg" data-src="assets/img/gallery/pQTC_JEC1.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_JEC1.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_JEC2.jpg" data-src="assets/img/gallery/pQTC_JEC2.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_JEC2.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_JEC3.jpg" data-src="assets/img/gallery/pQTC_JEC3.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_JEC3.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_JFP1.jpg" data-src="assets/img/gallery/pQTC_JFP1.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_JFP1.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_JFP2.jpg" data-src="assets/img/gallery/pQTC_JFP2.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_JFP2.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_JFP3.jpg" data-src="assets/img/gallery/pQTC_JFP3.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_JFP3.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_PPWC1.jpg" data-src="assets/img/gallery/pQTC_PPWC1.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_PPWC1.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_PPWC2.jpg" data-src="assets/img/gallery/pQTC_PPWC2.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_PPWC2.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="assets/img/gallery/pQTC_PPWC3.jpg" data-src="assets/img/gallery/pQTC_PPWC3.jpg" data-sub-html="<h4>TheTestingPro<sup>TM</sup></h4><p>Responsible protection to keep from spreading coronavirus and its variants.</p>">
                        <a href="">
                            <img class="img-responsive" src="assets/img/gallery/pQTC_PPWC3.jpg">
                        </a>
                    </li>
                </ul>
            </div>
  </div>
  </div>
</div>

</section>
<!-- End About Section -->
<!-- End Body Section -->


</div>
</section> 


</main><!-- End #main -->


<?php
require_once('footer.php');
?>
<script src="assets/js/light-gallery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#lightgallery').lightGallery(); 
    });
</script>