<?php include 'headerhospital.php'; ?>
<?php include 'breadcrumb-gyne.php'; ?>

<!-- Department details section start -->


<section style="margin:auto;  padding-left: 150px; padding-right: 150px; color: black;">
  <section>
    <div style="text-align: justify; color: black">
      <p style="color: black; font-family: var(--title-font);">
        The Department of Gynecology & Obstetrics at MH Samorita Medical College & Hospital offers
        comprehensive care for women’s reproductive health across all stages of life. We are committed
        to providing patient-centered, evidence-based care with compassion and excellence.

        Our department is equipped with advanced facilities to support a wide range of services — from routine
        gynecological check-ups to high-risk pregnancy management and complex surgical interventions.
        With a team of experienced consultants, surgeons, and support staff, we ensure both clinical
        excellence and emotional support for every patient.

        In addition to clinical care, the department plays a vital academic role in educating future doctors,
        with hands-on training, case-based learning, and research contributions.
      </p>
    </div>
  </section>


  <section style="display: flex; justify-content: space-around;">
    <section>
      <h3 style="text-decoration: underline; font-family: var(--title-font);">Core Services</h3>
      <div>
        <ul style="list-style-type: square;">
          <li>Antenatal Care & High-Risk Pregnancy Management.</li>
          <li>Normal & Caesarean Delivery (C-Section).</li>
          <li>Menstrual Disorders Treatment.</li>
          <li>Infertility Evaluation & Treatment.</li>
          <li>Uterine Fibroids & Ovarian Cyst Management.</li>
          <li>Laparoscopic & Open Gynecologic Surgeries.</li>
          <li>Pap Smear & Cervical Cancer Screening.</li>
          <li>Contraceptive & Family Planning Services.</li>
          <li>Menopausal Health Management.</li>
          <li>Postnatal Care & Counseling.</li>
        </ul>
      </div>
    </section>

    <section>
      <h3 style="text-decoration: underline;">Facilities & Technology</h3>
      <div>
        <ul style="list-style-type: square;">
          <li>Well-equipped Labor & Delivery Suite.</li>
          <li>Fetal Monitoring Systems and Ultrasound Facilities.</li>
          <li>Dedicated Gynecology OT for major and minor surgeries.</li>
          <li>24/7 Emergency Obstetric Care.</li>
          <li>Access to NICU (Neonatal Intensive Care Unit) for high-risk newborns.</li>
          <li>Sterile environment with infection control protocols.</li>
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
$sql = "SELECT id, name, degree, image, mobile FROM dr_profile WHERE department = 'Cardiology'";
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
        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="400ms">
            <div class="team-card-ten">
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
              <div class="info-box-ten text-center">
                <h4 class="name">
                  <a href="#"><span style="font-size: 16px; color:#07ccec;">
                      <?php echo htmlspecialchars($row['name']); ?>
                    </span></a>
                </h4>
                <p class="designation"><br> <?php echo htmlspecialchars($row['degree']); ?></p>
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
                  <p class="mt-2" style="margin: 0;">
                    <a href="drprofile.php?doctor=<?php echo urlencode($row['id']); ?>" class="btn btn-sm btn-outline-primary">View Profile</a>
                  </p>
                  <p class="mt-2" style="margin: 0;">
                    <a href="tel:<?php echo htmlspecialchars($row['mobile']); ?>" class="btn btn-sm btn-outline-primary">Get Appointment</a>
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




<?php include 'footerhospital.php'; ?>