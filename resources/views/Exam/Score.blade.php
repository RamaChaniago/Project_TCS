<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOEFL ITP Score Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9fafb;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        .score-circle {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 12px solid #0d6efd;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
        .certificate-card {
            background: linear-gradient(45deg, #ffffff, #f8f9ff);
            border: 1px solid #e0e7ff;
        }
        .certificate-container {
            position: relative;
            background-color: #fff;
            padding: 3rem;
            border: 15px solid #f8f9fa;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
        }
        .certificate-seal {
            position: absolute;
            bottom: 30px;
            right: 40px;
            width: 120px;
            height: 120px;
            opacity: 0.8;
        }
        .certificate-ribbon {
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 30px;
            background-color: #0d6efd;
            border-radius: 0 0 75px 75px;
        }
        .certificate-header {
            border-bottom: 2px solid #e9ecef;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
        }
        .signature-line {
            border-top: 1px solid #212529;
            width: 250px;
            margin: 0 auto;
            padding-top: 0.5rem;
        }
        .badge-level {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
        }
        @media print {
            .no-print {
                display: none !important;
            }
            .container-fluid {
                width: 100%;
                max-width: 100%;
            }
            body {
                background-color: white;
            }
            .card {
                box-shadow: none !important;
                border: 1px solid #ddd !important;
            }
            .certificate-container {
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid py-5">
        <div class="card shadow-sm border-0 rounded-3 mb-4" data-aos="fade-up">
            <div class="card-header bg-white p-4 border-0">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <div>
                        <h4 class="fw-bold mb-1">TOEFL ITP Examination Results</h4>
                        <p class="text-muted mb-0">Your official test score and performance analysis</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 no-print">
                        <button class="btn btn-outline-primary rounded-pill" onclick="window.print()">
                            <i class="bi bi-printer me-1"></i> Print Results
                        </button>
                        <button class="btn btn-outline-success rounded-pill" id="downloadBtn">
                            <i class="bi bi-download me-1"></i> Download PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm border-0 rounded-3 mb-4 certificate-card" data-aos="fade-up">
                    <div class="card-body p-5 text-center">
                        <div class="mb-4">
                            <img src="/api/placeholder/150/50" alt="TOEFL ITP Logo" class="mb-3">
                            <h3 class="fw-bold">TOEFL ITP® Score Report</h3>
                            <p class="text-muted">Test Date: May 6, 2025</p>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6 text-md-start mb-3 mb-md-0">
                                <p class="mb-1"><strong>Name:</strong> John Smith</p>
                                <p class="mb-1"><strong>Registration Number:</strong> ITP-25050687</p>
                                <p class="mb-0"><strong>Test Center:</strong> University Language Center</p>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <p class="mb-1"><strong>Date of Birth:</strong> January 15, 1998</p>
                                <p class="mb-1"><strong>Native Language:</strong> Indonesian</p>
                                <p class="mb-0"><strong>Valid Until:</strong> May 6, 2027</p>
                            </div>
                        </div>

                        <div class="my-5">
                            <div class="score-circle">
                                <div>
                                    <h2 class="fw-bold mb-0 text-primary">580</h2>
                                    <p class="mb-0 small">Overall Score</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="badge bg-primary badge-level">B2 - Upper Intermediate</span>
                            </div>
                        </div>

                        <div class="certificate-container my-3">
                            <div class="certificate-ribbon"></div>
                            <div class="text-center certificate-header">
                                <div class="mb-2">
                                    <img src="/api/placeholder/180/60" alt="TOEFL ITP Logo" class="img-fluid mb-2" />
                                </div>
                                <h1 class="mb-0 fw-bold">Certificate of Achievement</h1>
                            </div>

                            <div class="text-center mb-5">
                                <p class="lead mb-0">This certifies that</p>
                                <h2 class="my-3 fw-bold">John Smith</h2>
                                <p class="lead">has successfully completed the</p>
                                <h3 class="fw-bold mb-3">TOEFL ITP Examination</h3>
                                <p class="lead">with an overall score of</p>
                                <h1 class="display-4 fw-bold text-primary my-3">580</h1>
                                <p class="lead">demonstrating <strong>B2 - Upper Intermediate</strong> English proficiency</p>
                            </div>

                            <div class="row mt-5 pt-4">
                                <div class="col-6 text-center">
                                    <div class="signature-line">
                                        <p class="small mb-0">Dr. Jane Smith</p>
                                        <p class="small text-muted">Test Administrator</p>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="signature-line">
                                        <p class="small mb-0">May 6, 2025</p>
                                        <p class="small text-muted">Date of Issue</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-3 text-center">
                                <p class="small text-muted mb-0">Certificate ID: TOEFL-ITP-2025-05-06-789456</p>
                                <p class="small text-muted">This certificate can be verified at verify.toefl-itp.org</p>
                            </div>

                            <div class="certificate-seal">
                                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="50" cy="50" r="45" fill="none" stroke="#0d6efd" stroke-width="2" />
                                    <circle cx="50" cy="50" r="40" fill="none" stroke="#0d6efd" stroke-width="1" />
                                    <text x="50" y="45" text-anchor="middle" fill="#0d6efd" font-size="12" font-weight="bold">TOEFL ITP</text>
                                    <text x="50" y="60" text-anchor="middle" fill="#0d6efd" font-size="10">CERTIFIED</text>
                                </svg>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <p class="mb-0 text-muted small">This is an official score report issued by ETS TOEFL ITP® Program</p>
                            <p class="text-muted small">Verification code: TF-580-25050687</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card shadow-sm border-0 rounded-3 mb-4 sticky-lg-top" data-aos="fade-up">
                    <div class="card-header bg-white p-4 border-0">
                        <h5 class="mb-0">Score Summary</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-semibold">Overall Score:</span>
                                <span class="fw-bold">580</span>
                            </div>
                            <div class="progress mb-3" style="height: 0.7rem;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 87%;"
                                     aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between small text-muted">
                                <span>310</span>
                                <span>677</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="mb-3">Percentile Ranking</h6>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1 small">
                                    <span>Your Score (580)</span>
                                    <span class="fw-semibold">85th Percentile</span>
                                </div>
                                <div class="progress" style="height: 0.5rem;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;"
                                         aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-muted mt-2 small">
                                    You scored higher than 85% of test takers.
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="mb-3">CEFR Level</h6>
                            <div class="mb-3">
                                <div class="card bg-light border-0 p-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="bg-primary rounded-circle p-1 me-2" style="width: 1.5rem; height: 1.5rem; display: flex; align-items: center; justify-content: center;">
                                            <i class="bi bi-check2 text-white small"></i>
                                        </div>
                                        <span class="fw-semibold">B2 - Upper Intermediate</span>
                                    </div>
                                    <p class="small text-muted mb-0">
                                        You can understand the main ideas of complex text and interact with a degree of fluency with native speakers.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h6 class="mb-3">Next Steps</h6>
                            <div class="d-grid gap-2 mb-3 no-print">
                                <button class="btn btn-primary rounded-pill py-2">
                                    <i class="bi bi-share me-1"></i> Share Results
                                </button>
                            </div>
                            <div class="text-center mt-3">
                                <a href="#" class="text-decoration-none small fw-semibold">Need help understanding your scores?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 rounded-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-header bg-white p-4 border-0">
                        <h5 class="mb-0">Score Applications</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h6 class="mb-3">Your Score Meets Requirements For:</h6>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-success bg-opacity-10 rounded-circle p-1 me-3" style="width: 2rem; height: 2rem; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-check2-circle text-success"></i>
                                </div>
                                <div>
                                    <p class="mb-0 fw-medium">Most Undergraduate Programs</p>
                                    <p class="small text-muted mb-0">Required: 550+</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-success bg-opacity-10 rounded-circle p-1 me-3" style="width: 2rem; height: 2rem; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-check2-circle text-success"></i>
                                </div>
                                <div>
                                    <p class="mb-0 fw-medium">English Teaching Positions</p>
                                    <p class="small text-muted mb-0">Required: 550-580</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="bg-warning bg-opacity-10 rounded-circle p-1 me-3" style="width: 2rem; height: 2rem; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-exclamation-circle text-warning"></i>
                                </div>
                                <div>
                                    <p class="mb-0 fw-medium">Most Graduate Programs</p>
                                    <p class="small text-muted mb-0">Required: 600+ (Score: 580)</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4 no-print">
                            <button class="btn btn-outline-success rounded-pill px-4">
                                <i class="bi bi-mortarboard me-1"></i> View Compatible Programs
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({ duration: 600, once: true });

            document.getElementById('downloadBtn').addEventListener('click', () => {
                alert('Downloading PDF score report...');
                // In a real application, this would trigger a PDF download
            });
        });
    </script>
</body>
</html>
