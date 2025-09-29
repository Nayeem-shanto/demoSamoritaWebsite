<?php include 'headerhospital.php'; ?>

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper ">
  <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Department of Medicine</h1>
      <div class="breadcumb-menu-wrap">
        <i class="far fa-home-lg"></i>
        <ul class="breadcumb-menu">
          <li><a href="index-4.php">Home</a></li>
          <li><a href="medicine.php">medicine</a></li>

        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Department details section start -->
<section style="margin:auto;  padding-left: 150px; padding-right: 150px;">
  <section>
    <div style="text-align: justify;">
      <p>
        The Department of medicine at MH Samorita Medical College & Hospital is a center of excellence for
        the diagnosis, treatment, and prevention of cardiovascular diseases. Our team of highly qualified cardiologists,
        supported by skilled medical professionals and advanced diagnostic technology, is dedicated to delivering
        comprehensive cardiac care to both inpatients and outpatients. We offer a full spectrum of cardiac services, including non-invasive, interventional, and preventive medicine, in a patient-focused, compassionate environment. Our medicine department also plays an integral role in academic activities, contributing to the training of future medical professionals.
      </p>
    </div>
  </section>

  <section style="display: flex; justify-content: space-around;">
    <section>
      <h3 style="text-decoration: underline;">Core Services</h3>
      <div>
        <ul style="list-style-type: square;">
          <li>Cardiac Consultation & Risk Assessment.</li>
          <li>12-Lead ECG (Electrocardiogram).</li>
          <li>2D & 3D Echocardiography.</li>
          <li>Treadmill Test (TMT) / Stress ECG.</li>
          <li>Holter Monitoring.</li>
          <li>Ambulatory Blood Pressure Monitoring.</li>
          <li>Coronary Angiography & Angioplasty (PCI).</li>
          <li>Pacemaker Implantation (Temporary & Permanent).</li>
          <li>Heart Failure & Hypertension Management.</li>
          <li>Post-Operative Cardiac Rehabilitation.</li>
        </ul>
      </div>
    </section>

    <section>
      <h3 style="text-decoration: underline;">Facilities & Technology</h3>
      <div>
        <ul style="list-style-type: square;">
          <li>Fully equipped Cardiac Catheterization Laboratory (Cath Lab).</li>
          <li>Digital ECG machines and Doppler echocardiography.</li>
          <li>High-definition monitors and real-time imaging systems.</li>
          <li>Cardiac ICU with trained cardiac nurses.</li>
          <li>A24/7 emergency cardiac response team.</li>
        </ul>
      </div>
    </section>
  </section>
</section>

<!-- Doctor list -->
 <?php
// DB connection (change credentials as needed)
$conn = new mysqli("localhost", "root", "", "dashboard_mh");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data fetch
$sql = "SELECT id, name, degree, image, mobile FROM dr_profile WHERE department = 'Medicine & Allide'";
$result = $conn->query($sql);
?>

<!-- team-section-two -->
<section class="team-section-ten space space-md-bottom">
  <div class="title-area-four text-center wow fadeInUp" data-wow-delay="400ms">
    <span class="sub-title8">
      <h3>Meet Our Team and Medical<br> Expert Board</h3>
    </span>
  </div>
  <div class="container-style8">
    <div class="row justify-content-center">
      <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="400ms">
            <div class="team-card-ten" style="overflow: hidden; height: 520px; display: flex; flex-direction: column;">
              <div class="team-img-ten">
                <a href="#"> <!-- Optional profile link -->
                  <img src="../samoritadrprofile/upload/<?php echo htmlspecialchars($row['image']); ?>" alt="">
                </a>
                <span class="share-icon-ten fa fa-share-alt"></span>
                <div class="social-links-ten">
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
              </div>
              <div class="info-box-ten text-center" style="padding: 15px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                <h4 class="name" style="font-size: 18px;">
                  <a href="#"><span style="font-size: 14px; color:#07ccec;">
                    <?php echo htmlspecialchars($row['name']); ?>
                  </span></a>
                </h4>
                <p style="font-size: 14px;" class="designation"><?php echo htmlspecialchars($row['degree']); ?></p>
                <p style="position: absolute; bottom: 65px; left: 50%; transform: translateX(-50%); width: 90%; border-bottom: 1px solid #D9D9D9; margin: 0;"></p>
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
                  <p class="mt-2" style="margin: 0;">
                    <a href="drprofile.php?doctor=<?php echo urlencode($row['id']); ?>" class="btn btn-sm btn-outline-primary" style="padding: 6px 12px;">View Profile</a>
                  </p>
                  <p class="mt-2" style="margin: 0;">
                    <a href="tel:<?php echo htmlspecialchars($row['mobile']); ?>" class="btn btn-sm btn-outline-primary" style="padding: 6px 12px;">Get Appointment</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No doctors found.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- End team-section-two -->

<!-- patients care highlights -->
<section class="vs-about-wrapper space" data-bg-src="assets/img/bg/bg-shape-1.jpg">
  <div class="container">
    <div class="row ">
      <div class="col-lg-6 mb-30 mb-lg-0">
        <div class="about-img1 wow fadeInUp" data-wow-delay="0.3s">
          <img src="assets/img/about/about-1-1.png" alt="About Image" class="w-100">
          <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="about-content ps-xl-5 ms-xl-2">
          <h2 class="h1 mt-n2 mb-3 pb-1">Patient Care Highlights</h2>
          <ul style="list-style-type: square;">
             <li>🕐 OPD Hours: Sunday – Thursday, 9:00 AM – 5:00 PM</li>
          <li>24/7 Emergency Services</li>
          <li>Emphasis on safe motherhood and birth preparedness</li>
          <li>Individualized birth plans in consultation with expectant mothers</li>
          <li>Compassionate counseling for reproductive health and mental well-being</li>
          </ul>
          <div class="media-style1">
            <div class="media-icon"><i class="fas fa-phone"></i></div>
            <div class="media-body">
              <h3 class="media-title">CALL ANYTIME 24/7</h3>
              <p class="media-text"><a href="tel:+88 02 8878080">+88 02 8878080</a></p>
            </div>
          </div>
          <a href="about.html" class="vs-btn">OPD Hours: Sunday – Thursday, 9:00 AM – 5:00 PM</a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'footerhospital.php'; ?>