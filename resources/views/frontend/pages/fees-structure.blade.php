@extends('frontend.layouts.main')
@section('title', 'Fees Structure')
@push('styles')
    <style>
        .fee-note {
            font-size: 12px;
            color: #666;
            margin-top: 3px;
            font-weight: normal;
            line-height: 1.2;
            display: block;
            font-style: italic;
            white-space: nowrap;
        }
    </style>
@endpush
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Fees Structure </h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Fees Structure</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-single-content">
                        <h3 class="section-title">Programme-wise Fee Structure</h3>
                        <p class="mb-3">Click on any programme row to view detailed fee breakdown.</p>
                        <div class="team-contact-form">
                            <table class="table table-striped" id="fee-structure-table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Programme</th>
                                        <th scope="col" class="tbl-bottom">Duration</th>
                                        <th scope="col" class="tbl-bottom">Semester I</th>
                                        <th scope="col" class="tbl-bottom">Semester II</th>
                                        <th scope="col" class="tbl-bottom">Semester III</th>
                                        <th scope="col" class="tbl-bottom">Semester IV</th>
                                        <th scope="col" class="tbl-bottom">Total Fees</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- MBA Row -->
                                    <tr class="programme-row" data-programme="MBA">
                                        <td>Master of Business Administration (MBA)</td>
                                        <td>2 Years</td>
                                        <td>₹27,000<div class="fee-note">Excluding e-Suvidha fee</div>
                                        </td>
                                        <td>₹19,500<div class="fee-note">Excluding e-Suvidha fee</div>
                                        </td>
                                        <td>₹24,000<div class="fee-note">Excluding e-Suvidha fee</div>
                                        </td>
                                        <td>₹19,500<div class="fee-note">Excluding e-Suvidha fee</div>
                                        </td>
                                        <td>₹90,000<div class="fee-note">Excluding e-Suvidha fee</div>
                                        </td>
                                    </tr>
                                    <!-- MBA Details Row -->
                                    <tr class="fee-details-row" id="MBA-details">
                                        <td colspan="7" class="p-0">
                                            <div class="fee-details-content p-3">
                                                <h5 class="mb-3 text-primary">MBA - Detailed Fee Structure</h5>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th>Sr. No.</th>
                                                            <th>Particulars of Fee</th>
                                                            <th>One Time (Rs.)</th>
                                                            <th>Annual (Rs.)</th>
                                                            <th>Semester Fee (For each Semester) (Rs.)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>University Registration / Enrollment Fee (Non-Refundable)
                                                            </td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Admission Fee (Non-Refundable)</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Application Fee (Non-Refundable)</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>E-Suvidha Fee (SWAYAM Platform etc.)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>400.00 per course</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Tuition Fee</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>18500.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>e-Examination Fee (End-Term)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>Study Material (e-LM) Fee</td>
                                                            <td></td>
                                                            <td>2000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>Centre Development Fee</td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>Degree cum Convocation Fee</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>Teaching Learning Resource/ e-Resource Fund</td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>Online Assessment Fee (CIA)</td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>Learner Support Services Fund</td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>Back Papers Exam Fee (Minimum) and if more than ONE papers
                                                                then Fee per course/paper:</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>Rechecking / Re-evaluation Fee per Course / Paper</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>Project/Dissertation Evaluation and Online Viva-voce Fee
                                                            </td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td colspan="2" class="text-center"><strong>TOTAL</strong>
                                                            </td>
                                                            <td>3000.00 (EXCLUDING BACK PAPERS EXAM FEE AND
                                                                RECHECKING/RE-EVALUATION FEE)</td>
                                                            <td>4500.00</td>
                                                            <td>19500.00 (EXCLUDING E-SUVIDHA FEE)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- MCA Row -->
                                    <tr class="programme-row" data-programme="MCA">
                                        <td>Master of Computer Application (MCA)</td>
                                        <td>2 Years</td>
                                        <td>₹21,150<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹13,000<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹17,850<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹13,000<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹65,000<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                    </tr>
                                    <!-- MCA Details Row -->
                                    <tr class="fee-details-row" id="MCA-details">
                                        <td colspan="7" class="p-0">
                                            <div class="fee-details-content p-3">
                                                <h5 class="mb-3 text-primary">MCA - Detailed Fee Structure</h5>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th>Sr. No.</th>
                                                            <th>Particulars of Fee</th>
                                                            <th>One Time (Rs.)</th>
                                                            <th>Annual (Rs.)</th>
                                                            <th>Semester Fee (For each Semester) (Rs.)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>University Registration / Enrollment Fee (Non-Refundable)
                                                            </td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Admission Fee (Non-Refundable)</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Application Fee (Non-Refundable)</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>E-Suvidha Fee (SWAYAM Platform etc.)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>300.00 per course</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Tuition Fee</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>12000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>e-Examination Fee (End-Term)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>Study Material (e-LM) Fee</td>
                                                            <td></td>
                                                            <td>2000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>Centre Development Fee</td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>Degree cum Convocation Fee</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>Teaching Learning Resource/ e-Resource Fund</td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>Online Assessment Fee (CIA)</td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>Learner Support Services Fund</td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>Back Papers Exam Fee (Minimum) And if more than ONE papers
                                                                then Fee per course/paper:</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>Rechecking / Re-evaluation Fee per Course / Paper</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>Project Evaluation and Online Viva-voce Fee</td>
                                                            <td>500.00 (Major)<br>300.00 (Minor)</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td>Practical Examination Fee</td>
                                                            <td></td>
                                                            <td>350.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td colspan="2" class="text-center"><strong>TOTAL</strong>
                                                            </td>
                                                            <td>3300.00 (EXCLUDING BACK PAPERS EXAM FEE AND
                                                                RECHECKING/RE-EVALUATION FEE)</td>
                                                            <td>4850.00</td>
                                                            <td>13000.00 (EXCLUDING E-SUVIDHA FEE)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- MA History Row -->
                                    <tr class="programme-row" data-programme="MA-History">
                                        <td>Master of Arts (History)</td>
                                        <td>2 Years</td>
                                        <td>₹9,050<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹3,300<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹6,050<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹3,300<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹21,700<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                    </tr>
                                    <!-- MA History Details Row -->
                                    <tr class="fee-details-row" id="MA-History-details">
                                        <td colspan="7" class="p-0">
                                            <div class="fee-details-content p-3">
                                                <h5 class="mb-3 text-primary">MA (History) - Detailed Fee Structure</h5>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th>Sr. No.</th>
                                                            <th>Particulars of Fee</th>
                                                            <th>One Time (Rs.)</th>
                                                            <th>Annual (Rs.)</th>
                                                            <th>Semester Fee (For each Semester) (Rs.)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>University Registration / Enrollment Fee (Non-Refundable)
                                                            </td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Admission Fee (Non-Refundable)</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Application Fee (Non-Refundable)</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>E-Suvidha Fee (SWAYAM Platform etc.)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>250.00 per course</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Tuition Fee</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>2300.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>e-Examination Fee (End Term)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>Study Material (e-LM) Fee</td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>Centre Development Fee</td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>Degree cum Convocation Fee</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>Teaching Learning Resource/ e-Resource Fund</td>
                                                            <td></td>
                                                            <td>250.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>Online Assessment Fee (CIA)</td>
                                                            <td></td>
                                                            <td>250.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>Learner Support Services Fund</td>
                                                            <td></td>
                                                            <td>250.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>Back Papers Exam Fee (Minimum) And if more than ONE papers
                                                                then Fee per course/paper:</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>Rechecking / Re-evaluation Fee per Course / Paper</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>Project / Dissertation Evaluation and Online Viva-voce Fee
                                                            </td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td colspan="2" class="text-center"><strong>TOTAL</strong>
                                                            </td>
                                                            <td>3000.00 (EXCLUDING BACK PAPERS EXAM FEE AND
                                                                RECHECKING/RE-EVALUATION FEE)</td>
                                                            <td>2750.00</td>
                                                            <td>3300.00 (EXCLUDING E-SUVIDHA FEE)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- MA Economics Row -->
                                    <tr class="programme-row" data-programme="MA-Economics">
                                        <td>Master of Arts (Economics)</td>
                                        <td>2 Years</td>
                                        <td>₹9,050<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹3,300<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹6,050<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹3,300<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹21,700<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                    </tr>
                                    <!-- MA Economics Details Row -->
                                    <tr class="fee-details-row" id="MA-Economics-details">
                                        <td colspan="7" class="p-0">
                                            <div class="fee-details-content p-3">
                                                <h5 class="mb-3 text-primary">MA (Economics) - Detailed Fee Structure</h5>
                                                <!-- Same as MA History fee table -->
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th>Sr. No.</th>
                                                            <th>Particulars of Fee</th>
                                                            <th>One Time (Rs.)</th>
                                                            <th>Annual (Rs.)</th>
                                                            <th>Semester Fee (For each Semester) (Rs.)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>University Registration / Enrollment Fee (Non-Refundable)
                                                            </td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Admission Fee (Non-Refundable)</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Application Fee (Non-Refundable)</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>E-Suvidha Fee (SWAYAM Platform etc.)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>250.00 per course</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Tuition Fee</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>2300.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>e-Examination Fee (End Term)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>Study Material (e-LM) Fee</td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>Centre Development Fee</td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>Degree cum Convocation Fee</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>Teaching Learning Resource/ e-Resource Fund</td>
                                                            <td></td>
                                                            <td>250.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>Online Assessment Fee (CIA)</td>
                                                            <td></td>
                                                            <td>250.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>Learner Support Services Fund</td>
                                                            <td></td>
                                                            <td>250.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>Back Papers Exam Fee (Minimum) And if more than ONE papers
                                                                then Fee per course/paper:</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>Rechecking / Re-evaluation Fee per Course / Paper</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>Project / Dissertation Evaluation and Online Viva-voce Fee
                                                            </td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td colspan="2" class="text-center"><strong>TOTAL</strong>
                                                            </td>
                                                            <td>3000.00 (EXCLUDING BACK PAPERS EXAM FEE AND
                                                                RECHECKING/RE-EVALUATION FEE)</td>
                                                            <td>2750.00</td>
                                                            <td>3300.00 (EXCLUDING E-SUVIDHA FEE)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- MA Political Science Row -->
                                    <tr class="programme-row" data-programme="MA-Political-Science">
                                        <td>Master of Arts (Political Science)</td>
                                        <td>2 Years</td>
                                        <td>₹9,050<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹3,300<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹6,050<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹3,300<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                        <td>₹21,700<div class="fee-note">Excluding e-Suvidha fee</div></td>
                                    </tr>
                                    <!-- MA Political Science Details Row -->
                                    <tr class="fee-details-row" id="MA-Political-Science-details">
                                        <td colspan="7" class="p-0">
                                            <div class="fee-details-content p-3">
                                                <h5 class="mb-3 text-primary">MA (Political Science) - Detailed Fee
                                                    Structure</h5>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th>Sr. No.</th>
                                                            <th>Particulars of Fee</th>
                                                            <th>One Time (Rs.)</th>
                                                            <th>Annual (Rs.)</th>
                                                            <th>Semester Fee (For each Semester) (Rs.)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>University Registration / Enrollment Fee (Non-Refundable)
                                                            </td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Admission Fee (Non-Refundable)</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Application Fee (Non-Refundable)</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>E-Suvidha Fee (SWAYAM Platform etc.)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>250.00 per course</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Tuition Fee</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>2300.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>e-Examination Fee (End Term)</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>Study Material (e-LM) Fee</td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>Centre Development Fee</td>
                                                            <td></td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>Degree cum Convocation Fee</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>Teaching Learning Resource/ e-Resource Fund</td>
                                                            <td></td>
                                                            <td>250.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>Online Assessment Fee (CIA)</td>
                                                            <td></td>
                                                            <td>250.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>Learner Support Services Fund</td>
                                                            <td></td>
                                                            <td>250.00</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>Back Papers Exam Fee (Minimum) And if more than ONE papers
                                                                then Fee per course/paper:</td>
                                                            <td>1000.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>Rechecking / Re-evaluation Fee per Course / Paper</td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>Project / Dissertation Evaluation and Online Viva-voce Fee
                                                            </td>
                                                            <td>500.00</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td colspan="2" class="text-center"><strong>TOTAL</strong>
                                                            </td>
                                                            <td>3000.00 (EXCLUDING BACK PAPERS EXAM FEE AND
                                                                RECHECKING/RE-EVALUATION FEE)</td>
                                                            <td>2750.00</td>
                                                            <td>3300.00 (EXCLUDING E-SUVIDHA FEE)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="fee-notes mt-4">
                                <p><strong>Note:</strong></p>
                                <ol>
                                    <li>All fees are in Indian Rupees (₹)</li>
                                    <li>FEE FOR INTERNATIONAL STUDENTS / NRIs: The Fee for International Students and NRIs
                                        shall be DOUBLE of above proposed FEE under all Particulars of Heads which will be
                                        calculated in US Dollars, based on the rate of conversion from Indian Rupees on the
                                        Day of Admission/Registration.</li>
                                    <li>The above fee does not include Back Paper Exam Fee, Rechecking/Re-Evaluation Fee and
                                        e-Suvidha Fee.</li>
                                    <li>Delay in submission of semester fee by stipulated date will be responsibility of the
                                        learner and such learner will have to pay Rs. 100/- as late payment charges.</li>
                                    <li>In case any learner leaves the programme after completing
                                        1<sup>st</sup>/2<sup>nd</sup>/3<sup>rd</sup> semester and discontinues the
                                        programme, he / she will have to pay Rs. 500/- as Re-Admission Fee in addition to
                                        other usual fee/charges.</li>
                                    <li>All fees are in Indian Rupees (₹)</li>
                                    <li>Fees include tuition, examination, and library charges</li>
                                    <li>Additional charges may apply for hostel accommodation and transportation</li>
                                    <li>A one-time registration fee is applicable for all programmes</li>
                                    <li>E-Suvidha Fee is charged separately per course</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CSS Styles for Fee Structure Accordion -->
    <style>
        /* Main table styling */
        #fee-structure-table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 0;
        }

        /* Programme row styling */
        .programme-row {
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .programme-row:hover {
            background-color: #f0f8ff;
        }

        .programme-row.active {
            background-color: #e8f4ff;
            border-bottom: 2px solid #007bff;
        }

        /* Add arrow indicator */
        .programme-row td:first-child {
            position: relative;
            padding-left: 25px;
        }

        .programme-row td:first-child:before {
            content: "▶";
            position: absolute;
            left: 8px;
            color: #007bff;
            transition: transform 0.3s ease;
        }

        .programme-row.active td:first-child:before {
            transform: rotate(90deg);
            color: #0056b3;
        }

        /* Fee details row styling */
        .fee-details-row {
            display: none;
            background-color: #f9f9f9;
        }

        .fee-details-content {
            padding: 20px;
            border: 1px solid #dee2e6;
            border-top: none;
            border-radius: 0 0 4px 4px;
            box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.05);
        }

        /* Animation for opening/closing */
        .fee-details-row.show {
            animation: slideDown 0.5s ease forwards;
            display: table-row;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Detailed fee table styling */
        .fee-details-content table {
            margin-bottom: 0;
        }

        .fee-details-content table th {
            background-color: #f2f7ff;
            color: #333;
            font-weight: 600;
        }

        .fee-details-content h5 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #0056b3;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .table-responsive {
                display: block;
                width: 100%;
                overflow-x: auto;
            }

            #fee-structure-table th,
            #fee-structure-table td {
                white-space: nowrap;
            }
        }
    </style>

    <!-- JavaScript for Fee Structure Accordion -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all programme rows
            const programmeRows = document.querySelectorAll('.programme-row');

            // Add click event to each programme row
            programmeRows.forEach(row => {
                row.addEventListener('click', function() {
                    // Get the programme ID
                    const programmeId = this.getAttribute('data-programme');
                    const detailsRow = document.getElementById(programmeId + '-details');

                    // Check if this row is already active
                    const isActive = this.classList.contains('active');

                    // First, close all open rows
                    programmeRows.forEach(r => {
                        r.classList.remove('active');
                    });

                    document.querySelectorAll('.fee-details-row').forEach(dr => {
                        dr.classList.remove('show');
                        dr.style.display = 'none';
                    });

                    // If clicked row wasn't active before, open it
                    if (!isActive) {
                        this.classList.add('active');

                        if (detailsRow) {
                            detailsRow.style.display = 'table-row';
                            // Use setTimeout to ensure display:table-row takes effect before adding 'show' class
                            setTimeout(() => {
                                detailsRow.classList.add('show');
                            }, 10);

                            // Smooth scroll to the row if it's not in view
                            const rect = detailsRow.getBoundingClientRect();
                            const isInView = (
                                rect.top >= 0 &&
                                rect.bottom <= (window.innerHeight || document.documentElement
                                    .clientHeight)
                            );

                            if (!isInView) {
                                detailsRow.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'nearest'
                                });
                            }
                        }
                    }
                });
            });

            // Add hover effect for better UX
            programmeRows.forEach(row => {
                row.addEventListener('mouseover', function() {
                    if (!this.classList.contains('active')) {
                        this.style.backgroundColor = '#f0f8ff';
                    }
                });

                row.addEventListener('mouseout', function() {
                    if (!this.classList.contains('active')) {
                        this.style.backgroundColor = '';
                    }
                });
            });
        });
    </script>
@endsection
