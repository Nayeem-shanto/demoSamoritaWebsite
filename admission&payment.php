<?php include 'headerhospital.php'; ?>

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper ">
    <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">

            <div class="breadcumb-menu-wrap">
                <i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li><a href="index4.php">Home</a></li>
                    <li><a href="admission&payment.php">Admission & Payment</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Accordion Area
    ==============================-->
    <section class="vs-accordion-wrapper space">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 pb-10 pb-xl-0 mb-50 mb-xl-0">
            <div class="about-content">
              <span class="sec-subtitle text-theme h3 mb-0"
                >Admission and Payment</span
              >
              <h2 class="h1 mb-3">We’re Here For You</h2>
              <!-- Tab Area -->
              <ul
                class="nav about-tab-nav mb-3 mb-xl-4 mt-xl-4 pb-3 pt-4"
                id="myTab"
                role="tablist"
              >
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link vs-btn active"
                    id="menu1-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#menu1"
                    type="button"
                    role="tab"
                    aria-controls="menu1"
                    aria-selected="true"
                  >
                    Admission
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link vs-btn"
                    id="menu2-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#menu2"
                    type="button"
                    role="tab"
                    aria-controls="menu2"
                    aria-selected="false"
                  >
                    Before Admission
                  </button>
                </li>
              </ul>
              <div class="tab-content" id="aboutTab">
                <div
                  class="tab-pane fade show active"
                  id="menu1"
                  role="tabpanel"
                  aria-labelledby="menu1-tab"
                >
                  <p style="text-align: justify;">
                    At MHSHMC, patients can be admitted as an in-patient either from out-patient department (OPD) or from Emergency. After consultation with the patient in OPD, depending on patient’s condition and need, the Consultant may advice the patient for admission. In emergency cases, after primary evaluation, the patient might require admission in ward or critical care departments like HDU or ICU. Primary decision maker EMO In both cases, the hospital will provide you an Admission Form. Unusual patient like accidental / homicidal/ Suicidal attempt admission must informed police station.
                  </p>
                  <div class="row pt-3">
                    <div class="col-sm-auto mb-30 mb-md-0">
                      <img
                        src="assets/img/about/ab-tab-1-1.jpg"
                        alt="Tab Image"
                      />
                    </div>
                    <div class="col-sm-auto align-self-center">
                      <ul class="about-list list-unstyled text-title mb-0">
                        <li>For more Information, Visit our Admission Desk</li>
                        <li>Feel free to call at +88 02-8878080 24/7</li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="menu2"
                  role="tabpanel"
                  aria-labelledby="menu2-tab"
                >
                  <p style="text-align: justify;">
                    Aside from giving you the Admission Form, your consultant will advice you on the treatment plan and expected length of hospital stay before admission. You are requested to arrange necessary financial requirement prior to your admission. Based on treatment plan and the expected length of hospital stay, the billing estimate can be collected from our Billing Department. You can visit our Admission Desk for queries or information on admission process or you can call our Admission Desk at +88 02-8878080.
                  </p>
                  <div class="row pt-3">
                    <div class="col-auto mb-30 mb-md-0">
                      <img
                        src="assets/img/about/ab-tab-1-2.jpg"
                        alt="Tab Image"
                      />
                    </div>
                    <div class="col-auto align-self-center">
                      <ul class="about-list list-unstyled text-title mb-0">
                        <li>For more Information, Visit our Admission Desk</li>
                        <li>Feel free to call at +88 02-8878080 24/7</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Main accordian part -->
           <div class="col-xl-6">
  <div class="vs-accordion accordion" id="vsaccordion">
    <!-- Accordion Item 1 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse1"
          aria-expanded="true"
          aria-controls="collapse1"
        >
          Documents to Bring for Admission
        </button>
      </h2>
      <div
        id="collapse1"
        class="accordion-collapse collapse show"
        data-bs-parent="#vsaccordion"
      >
        <div class="accordion-body">
          <p style="text-align: justify;">For admission, you need to present consultants advise (prescription) and fill up the Admission Form given to you from the admission desk. For foreign patients, please bring your passport. Corporate patients are required to produce the organization’s employee ID card at the Admission Desk for availing premium service. For corporate clients having credit facility agreement with MHSHMC for in-patient service, GOP (Guarantee of Payment) or LOA (Letter of Authorization) will be required from their organization to avail the same.</p>
        </div>
      </div>
    </div>

    <!-- Accordion Item 2 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse2"
          aria-expanded="false"
          aria-controls="collapse2"
        >
         Admission Desk
        </button>
      </h2>
      <div
        id="collapse2"
        class="accordion-collapse collapse"
        data-bs-parent="#vsaccordion"
      >
        <div class="accordion-body">
          <p style="text-align: justify;">Our Admission Desk provides 24-hour service. If you are getting admitted from out-patient consultation, on your arrival at the Admission Desk, you will be requested to provide some basic information, which will enable us to handle your case with better understanding and also to keep track for follow-up.</p>
        </div>
      </div>
    </div>

    <!-- Accordion Item 3 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse3"
          aria-expanded="false"
          aria-controls="collapse3"
        >
          Registration for New Patients
        </button>
      </h2>
      <div
        id="collapse3"
        class="accordion-collapse collapse"
        data-bs-parent="#vsaccordion"
      >
        <div class="accordion-body">
          <p style="text-align: justify;">For new patients, you need to get a registration first and you will be issued a Patient Registration Card. For details of the registration process</p>
        </div>
      </div>
    </div>

    <!-- Accordion Item 4 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse4"
          aria-expanded="false"
          aria-controls="collapse4"
        >
          Admission Time
        </button>
      </h2>
      <div
        id="collapse4"
        class="accordion-collapse collapse"
        data-bs-parent="#vsaccordion"
      >
        <div class="accordion-body">
          <p>Admission desk is functional on 24/7 basis.</p>
        </div>
      </div>
    </div>

    <!-- Accordion Item 5 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse5"
          aria-expanded="false"
          aria-controls="collapse5"
        >
         Checking Out Time
        </button>
      </h2>
      <div
        id="collapse5"
        class="accordion-collapse collapse"
        data-bs-parent="#vsaccordion"
      >
        <div class="accordion-body">
          <p style="text-align: justify;">Checking out time will be at 12:00 noon. After 12 noon, next day’s rent will be calculated automatically by software.</p>
        </div>
      </div>
    </div>

    <!-- Accordion Item 6 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse6"
          aria-expanded="false"
          aria-controls="collapse6"
        >
          Retaining Bed
        </button>
      </h2>
      <div
        id="collapse6"
        class="accordion-collapse collapse"
        data-bs-parent="#vsaccordion"
      >
        <div class="accordion-body">
          <p style="text-align: justify;">When the patient is in a critical care unit, he/she is also allowed to retain a bed/room. However, the patient will be charged for double occupancy (Bed charge + critical care unit charges).</p>
        </div>
      </div>
    </div>

    <!-- Accordion Item 7 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse7"
          aria-expanded="false"
          aria-controls="collapse7"
        >
         Bed Transfer
        </button>
      </h2>
      <div
        id="collapse7"
        class="accordion-collapse collapse"
        data-bs-parent="#vsaccordion"
      >
        <div class="accordion-body">
          <p style="text-align: justify;">In the event of bed transfer during the course of treatment, the higher category bed charge will be applicable on the day of transfer. However, the charges for higher category will be applicable only if the patient has stayed more than 3 hours in the higher category.</p>
        </div>
      </div>
    </div>

    <!-- Accordion Item 8 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse8"
          aria-expanded="false"
          aria-controls="collapse8"
        >
          OT Booking
        </button>
      </h2>
      <div
        id="collapse8"
        class="accordion-collapse collapse"
        data-bs-parent="#vsaccordion"
      >
        <div class="accordion-body">
          <p style="text-align: justify;">Before operation, OT charge will have to be paid to ensure surgery on next day. Please note, this is essential for prior planning and scheduling of operations in order.</p>
        </div>
      </div>
    </div>

    <!-- Accordion Item 9 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse9"
          aria-expanded="false"
          aria-controls="collapse9"
        >
          Billing & Payment
        </button>
      </h2>
      <div
        id="collapse9"
        class="accordion-collapse collapse"
        data-bs-parent="#vsaccordion"
      >
        <div class="accordion-body">
          <p style="text-align: justify;">Depending upon the room requested and nature of the treatment planned for the patient, an initial deposit will be collected at the time of admission for which a receipt will be issued to you and this will be adjusted in your final bill. In the case of patients who are being admitted for any surgery/package service, the entire amount is payable at the time of admission. In case of visiting consultants patient initial deposit must consult with respective consultant. We accept cash as well as credit cards. We do not, however, accept cheques. While the patient is admitted, at any point the updated provisional bill can be collected from our IPD Billing Section at Level 4. Once your bill exceeds your deposit amount, you will be approached by our Billing Executives for further deposit. We request you to pay within 24 hours to avoid any future inconvenience. Before final billing decision must pay pharmacydue & take clearance from pharmacy. Corporate Patients having in-patient credit agreement with the hospital, who cannot produce LOA (Letter of Authorization), will have to pay the initial deposit, which will be refunded subsequently upon producing the LOA. For payments, you may contact our billing personnel at level-12 between 9:00 am to 5:00 pm. Payment should be made only to Billing Department personnel and not to any other individual. For any clarification regarding billing, please contact Billing Executive at +88 02-8878080 authority.</p>
        </div>
      </div>
    </div>
  </div>
</div>

      </div>
    </section>

<?php include 'footerhospital.php'; ?>