<?php include 'headerhospital.php'; ?>

<div class="breadcumb-wrapper">
  <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Doctor Profile</h1>
      <div class="breadcumb-menu-wrap">
        <i class="far fa-home-lg"></i>
        <ul class="breadcumb-menu">
          <li><a href="index-4.php">Home</a></li>
          <li>Doctor Details</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "dashboard_mh");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the doctor ID is passed via the URL
if (isset($_GET['doctor'])) {
    $doctor_id = $_GET['doctor'];

    // SQL query to fetch doctor details
    $sql = "SELECT * FROM dr_profile WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $doctor_id);  // Bind the doctor ID to the query
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch and display doctor details
        $doctor = $result->fetch_assoc();
    } else {
        echo "Doctor not found.";
        exit();
    }
} else {
    echo "No doctor ID provided.";
    exit();
}
?>

<section class="vs-details-wrapper space-top space-md-bottom">
  <div class="container">
    <div class="row gx-40">
      <!-- Left Column -->
      <div class="col-lg-5">
        <div class="member-header mb-40 overflow-hidden rounded-3 position-relative">
          <div class="member-details-img">
            <img src="../samoritadrprofile/upload/<?php echo htmlspecialchars($doctor['image']); ?>" alt="Doctor Image" class="w-100" />
          </div>
          <div class="member-angle-links">
            <div class="shape">
              <img src="assets/img/bg/member-shape.png" alt="Shape" />
            </div>
          </div>
          <a href="https://verify.bmdc.org.bd/" class="certifate-link">
            <span style="color: #07ccec;">BMDC Registration Number: <span><?php echo htmlspecialchars($doctor['bmdcregno']); ?></span></span>
            <i class="far fa-chevron-circle-right"></i>
          </a>
        </div>

        <div class="team-schedule bg-smoke wow fadeInUp" data-wow-delay="0.3s">
          <h3 class="h4 border-title">Time Schedule</h3>
          <table class="team-schedule-table">
            <tbody>
              <tr>
                <td>Dates:</td>
                <td><?php echo htmlspecialchars($doctor['timeschedule']); ?></td>
              </tr>
              <tr>
                <td>Room No:</td>
                <td><?php echo htmlspecialchars($doctor['roomno']); ?></td>
              </tr>
            </tbody>
          </table>
          <a href="tel:<?php echo htmlspecialchars($doctor['mobile']); ?>" class="vs-btn style2">
            <?php echo htmlspecialchars($doctor['mobile']); ?> <i class="fas fa-phone"></i>
          </a>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-7">
        <div class="team-content">
          <h2 class="mb-0 mt-n2"><?php echo htmlspecialchars($doctor['name']); ?></h2>
          <h4 class="text-theme fs-xs"><?php echo htmlspecialchars($doctor['degree']); ?></h4>

          <?php if (!empty($doctor['designation'])): ?>
            <p class="fs-md text-title" style="text-align: justify;">
              <?php echo nl2br(htmlspecialchars($doctor['designation'])); ?>
            </p>
          <?php endif; ?>

          <?php if (!empty($doctor['profilesummary'])): ?>
            <p class="fs-md text-title" style="text-align: justify;">
              <?php echo nl2br(htmlspecialchars($doctor['profilesummary'])); ?>
            </p>
          <?php endif; ?>

          <table class="member-table" style="background-color: #f3f6f7;">
            <tbody>
              <tr>
                <th><strong>Specialty</strong></th>
                <td><?php echo nl2br(htmlspecialchars($doctor['specialty'])); ?></td>
              </tr>
              <tr>
                <th><strong>Degrees</strong></th>
                <td><?php echo nl2br(htmlspecialchars($doctor['universities_attended'])); ?></td>
              </tr>
              <tr>
                <th><strong>Degrees</strong></th>
                <td><?php echo nl2br(htmlspecialchars($doctor['expertise'])); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footerhospital.php'; ?>