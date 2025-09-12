<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMER ROOM - Find Your Perfect Room in Cameroon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #2ecc71;
            --dark-green: #27ae60;
            --accent-yellow: #f1c40f;
            --light-yellow: #f9e79f;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }
        
        /* Improved Navigation */
        .navbar {
            background: rgba(255,255,255,0.98);
            box-shadow: 0 2px 16px rgba(44, 204, 113, 0.08), 0 1.5px 8px rgba(39, 174, 96, 0.07);
            padding: 12px 0;
            transition: all 0.3s ease;
        }
        
        .navbar-scrolled {
            padding: 8px 0;
            box-shadow: 0 4px 20px rgba(44, 204, 113, 0.12);
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            color: var(--primary-green);
            font-size: 1.7rem;
            letter-spacing: 1px;
            transition: color 0.2s;
        }
        
        .navbar-brand:hover, .navbar-brand:focus {
            color: var(--primary-green) !important;
        }
        
        .logo-img {
            height: 48px;
            width: 48px;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(44,204,113,0.10);
            background: #fff;
            margin-right: 6px;
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            color: var(--dark-color) !important;
            position: relative;
            transition: color 0.2s;
        }
        
        .nav-link.active, .nav-link:focus, .nav-link:hover {
            color: var(--primary-green) !important;
        }
        
        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-green), var(--accent-yellow));
            border-radius: 2px;
            transition: width 0.3s;
            position: absolute;
            left: 0;
            bottom: -4px;
        }
        
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }
        
        .btn-primary {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
            transition: all 0.2s;
        }
        
        .btn-primary:hover {
            background-color: var(--dark-green);
            border-color: var(--dark-green);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(46, 204, 113, 0.3);
        }
        
        .btn-accent {
            background-color: var(--accent-yellow);
            border-color: var(--accent-yellow);
            color: #333;
            transition: all 0.2s;
        }
        
        .btn-accent:hover {
            background-color: #e2b607;
            border-color: #e2b607;
            color: #333;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(241, 196, 15, 0.3);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/1000195131.webp');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 160px 0 200px 0;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
            position: relative;
        }
        
        /* Search Box */
        .search-box {
            background: white;
            border-radius: 16px;
            padding: 30px 25px 20px 25px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.18);
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 900px;
            margin: -80px auto 0;
        }
        
        /* Feature Cards */
        .feature-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }
        
        /* Testimonial Cards */
        .testimonial-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            padding: 25px;
            margin: 15px;
            border-top: 4px solid var(--primary-green);
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }
        
        .testimonial-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid var(--primary-green);
        }
        
        /* Stats Counter */
        .stats-counter {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%);
            color: white;
            padding: 70px 0;
            text-align: center;
        }
        
        .stat-number {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0;
        }
        
        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* Room Cards */
        .room-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .room-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }
        
        .room-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-green);
        }
        
        .verified-badge {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(to bottom, #2c3e50, #1a2530);
            color: white;
            padding: 70px 0 20px;
        }
        
        .footer-links h5 {
            border-bottom: 2px solid var(--primary-green);
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 12px;
            transition: transform 0.2s;
        }
        
        .footer-links li:hover {
            transform: translateX(5px);
        }
        
        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--primary-green);
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            font-size: 1.2rem;
            margin-right: 12px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background: var(--primary-green);
            transform: translateY(-3px);
        }
        
        /* Chat Widget */
        .chat-widget-btn {
            position: fixed;
            right: 30px;
            bottom: 30px;
            z-index: 10001;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.4);
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }
        
        .chat-widget-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(46, 204, 113, 0.5);
        }
        
        .chat-container {
            display: none;
            position: fixed;
            right: 30px;
            bottom: 100px;
            z-index: 10002;
            width: 350px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .chat-header {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%);
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .chat-body {
            height: 250px;
            padding: 15px;
            overflow-y: auto;
            background: #f9f9f9;
        }
        
        .message {
            margin-bottom: 15px;
            display: flex;
        }
        
        .message.bot {
            justify-content: flex-start;
        }
        
        .message.user {
            justify-content: flex-end;
        }
        
        .message-content {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 18px;
        }
        
        .bot .message-content {
            background: white;
            border: 1px solid #eee;
            border-bottom-left-radius: 5px;
        }
        
        .user .message-content {
            background: var(--primary-green);
            color: white;
            border-bottom-right-radius: 5px;
        }
        
        .chat-footer {
            padding: 15px;
            border-top: 1px solid #eee;
            display: flex;
        }
        
        .chat-footer input {
            flex: 1;
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 10px 15px;
            outline: none;
            transition: border-color 0.3s;
        }
        
        .chat-footer input:focus {
            border-color: var(--primary-green);
        }
        
        .chat-footer button {
            margin-left: 10px;
            background: var(--primary-green);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .chat-footer button:hover {
            background: var(--dark-green);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero {
                padding: 120px 0 160px 0;
            }
            
            .search-box {
                margin-top: -60px;
                padding: 20px 15px;
            }
            
            .stat-number {
                font-size: 2.2rem;
            }
            
            .chat-container {
                width: 90%;
                right: 5%;
                left: 5%;
            }
        }
        
        /* Animation utilities */
        .fade-in {
            animation: fadeIn 1s ease;
        }
        
        .slide-up {
            animation: slideUp 0.8s ease;
        }
        
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Section spacing */
        section {
            padding: 80px 0;
        }
        
        section.bg-light {
            background-color: #f8f9fa !important;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/Generated Image September 09, 2025 - 2_11PM(1)(1).png" alt="KMER ROOM Logo" class="logo-img">
                KMER ROOM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#listings">Find Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="#" class="btn btn-outline-success me-2">Log In</a>
                    <a href="#" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center slide-up">
                    <h1 class="display-4 fw-bold mb-4">Find Your Perfect Room in Cameroon</h1>
                    <p class="lead mb-4">The trusted platform for room rentals in Cameroon. Verified listings, secure payments, and direct communication with landlords.</p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="#listings" class="btn btn-accent btn-lg">Find a Room</a>
                        <a href="#" class="btn btn-outline-light btn-lg">List a Property</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Box -->
    <div class="container">
        <div class="search-box slide-up">
            <div class="row">
                <div class="col-md-3 mb-3 mb-md-0">
                    <label class="form-label fw-semibold">Location</label>
                    <select class="form-select">
                        <option selected>Yaounde</option>
                        <option>Yaoundé Central</option>
                        <option>Awae</option>
                        <option>Abang</option>
                        <option>Monti</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                    <label class="form-label fw-semibold">Price Range</label>
                    <select class="form-select">
                        <option selected>25,000 - 50,000 XAF</option>
                        <option>50,000 - 75,000 XAF</option>
                        <option>75,000 - 100,000 XAF</option>
                        <option>100,000+ XAF</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                    <label class="form-label fw-semibold">Room Type</label>
                    <select class="form-select">
                        <option selected>Single Room</option>
                        <option>Shared Room</option>
                        <option>Studio</option>
                        <option>Apartment</option>
                    </select>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button class="btn btn-primary w-100 py-2">Search Rooms</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Counter -->
    <section class="stats-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <h2 class="stat-number" data-count="1250">0</h2>
                    <p class="stat-label">Rooms Listed</p>
                </div>
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <h2 class="stat-number" data-count="850">0</h2>
                    <p class="stat-label">Happy Tenants</p>
                </div>
                <div class="col-md-3 col-6">
                    <h2 class="stat-number" data-count="320">0</h2>
                    <p class="stat-label">Verified Landlords</p>
                </div>
                <div class="col-md-3 col-6">
                    <h2 class="stat-number" data-count="98">0</h2>
                    <p class="stat-label">% Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Listings -->
    <section id="listings" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fade-in">Featured Rooms in Yaounde</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="room-card card">
                        <img src="images/20221209110725-ch1.jpg" class="card-img-top" alt="Room image" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="room-price">35,000 XAF</span>
                                <span class="verified-badge">Verified</span>
                            </div>
                            <h5 class="card-title">Cozy Single Room near University</h5>
                            <p class="card-text"><i class="fas fa-map-marker-alt me-2"></i>AWAE Zone, Yaoundé</p>
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item"><i class="fas fa-bed me-1"></i> 1 Bed</li>
                                <li class="list-inline-item"><i class="fas fa-bath me-1"></i> Shared Bath</li>
                                <li class="list-inline-item"><i class="fas fa-wifi"></i> WiFi</li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="room-card card">
                        <img src="images/MG_20190928_154910_4.jpg" class="card-img-top" alt="Room image" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="room-price">45,000 XAF</span>
                                <span class="verified-badge">Verified</span>
                            </div>
                            <h5 class="card-title">Furnished Room with Private Bath</h5>
                            <p class="card-text"><i class="fas fa-map-marker-alt me-2"></i>AWAE Zone, Yaoundé</p>
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item"><i class="fas fa-bed me-1"></i> 1 Bed</li>
                                <li class="list-inline-item"><i class="fas fa-bath me-1"></i> Private Bath</li>
                                <li class="list-inline-item"><i class="fas fa-wifi"></i> WiFi</li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="room-card card">
                        <img src="images/1000195131.webp" class="card-img-top" alt="Room image" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="room-price">60,000 XAF</span>
                                <span class="verified-badge">Verified</span>
                            </div>
                            <h5 class="card-title">Modern Studio Apartment</h5>
                            <p class="card-text"><i class="fas fa-map-marker-alt me-2"></i>AWAE Zone, Yaoundé</p>
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item"><i class="fas fa-bed me-1"></i> 1 Bed</li>
                                <li class="list-inline-item"><i class="fas fa-bath me-1"></i> Private Bath</li>
                                <li class="list-inline-item"><i class="fas fa-utensils"></i> Kitchen</li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-lg">View All Listings</a>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works">
        <div class="container">
            <h2 class="text-center mb-5 fade-in">How KMER ROOM Works</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex mb-4 slide-up">
                        <div class="me-4">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="fw-bold">1</span>
                            </div>
                        </div>
                        <div>
                            <h4>Create an Account</h4>
                            <p>Sign up as a tenant or landlord with your basic information.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4 slide-up">
                        <div class="me-4">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="fw-bold">2</span>
                            </div>
                        </div>
                        <div>
                            <h4>Search or List Rooms</h4>
                            <p>Tenants can search with filters, landlords can post verified listings.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4 slide-up">
                        <div class="me-4">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="fw-bold">3</span>
                            </div>
                        </div>
                        <div>
                            <h4>Book a Visit</h4>
                            <p>Schedule and pay a small fee to confirm your room visit appointment.</p>
                        </div>
                    </div>
                    <div class="d-flex slide-up">
                        <div class="me-4">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="fw-bold">4</span>
                            </div>
                        </div>
                        <div>
                            <h4>Secure the Room</h4>
                            <p>Finalize the rental with digital contracts and secure local payments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block fade-in">
                    <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded shadow" alt="Room search process">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fade-in">What Our Users Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4 fade-in">
                    <div class="testimonial-card text-center">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Testimonial" class="testimonial-img mx-auto">
                        <h5>Marie T.</h5>
                        <p class="text-muted">Student at University of Yaoundé</p>
                        <p class="fst-italic">"KMER ROOM saved me so much time! I found a perfect room near campus without dealing with unreliable agents. The verification process gave me peace of mind."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="testimonial-card text-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Testimonial" class="testimonial-img mx-auto">
                        <h5>Jean P.</h5>
                        <p class="text-muted">Landlord in AWAE Zone</p>
                        <p class="fst-italic">"As a landlord, I've struggled with finding reliable tenants. With KMER ROOM, I can manage my listings easily and communicate directly with serious renters."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="testimonial-card text-center">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Testimonial" class="testimonial-img mx-auto">
                        <h5>Chantal M.</h5>
                        <p class="text-muted">Young Professional</p>
                        <p class="fst-italic">"Moving to Yaoundé for work was stressful until I found KMER ROOM. The MTN Mobile Money integration made payments so easy, and I found a great place quickly."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-success text-white">
        <div class="container text-center">
            <h2 class="mb-4 fade-in">Ready to Find Your Perfect Room?</h2>
            <p class="lead mb-4 fade-in">Join thousands of students and young professionals who have found their ideal living space through KMER ROOM.</p>
            <a href="#" class="btn btn-accent btn-lg fade-in">Get Started Today</a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h4 class="text-white mb-4">
                        <i class="fas fa-home me-2"></i>KMER ROOM
                    </h4>
                    <p class="mb-4">The trusted platform for room rentals in Cameroon's AWAE Zone. Verified listings, secure payments, and direct communication.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0 footer-links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#how-it-works">How It Works</a></li>
                        <li><a href="#listings">Find Rooms</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0 footer-links">
                    <h5>For Tenants</h5>
                    <ul>
                        <li><a href="#">Find a Room</a></li>
                        <li><a href="#">Search Tips</a></li>
                        <li><a href="#">Rental Guide</a></li>
                        <li><a href="#">Safety Tips</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0 footer-links">
                    <h5>For Landlords</h5>
                    <ul>
                        <li><a href="#">List a Property</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Landlord Guide</a></li>
                        <li><a href="#">Success Stories</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-12 footer-links">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt me-2"></i> AWAE Zone, Yaoundé</li>
                        <li><i class="fas fa-phone me-2"></i> +237 6XX XXX XXX</li>
                        <li><i class="fas fa-envelope me-2"></i> info@kmerroom.com</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1)">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 KMER ROOM. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white me-3">Privacy Policy</a>
                    <a href="#" class="text-white">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Chat Widget -->
    <div class="chat-footer-box mt-4" style="position:static;max-width:600px;margin:32px auto 0 auto;z-index:10;">
        <div class="chat-header d-flex align-items-center">
            <span><i class="fas fa-comments"></i> Chat with us!</span>
        </div>
        <div class="chat-body" id="chatBody">
            <div class="chat-message bot"><div class="chat-bubble">Hi! How can we help you today?</div></div>
        </div>
        <form class="chat-footer" id="chatForm" autocomplete="off">
            <input type="text" id="chatInput" placeholder="Type your message..." required />
            <button type="submit">Send</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Chat logic
        const chatForm = document.getElementById('chatForm');
        const chatInput = document.getElementById('chatInput');
        const chatBody = document.getElementById('chatBody');
        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const msg = chatInput.value.trim();
            if (!msg) return;
            // Add user message
            const userMsg = document.createElement('div');
            userMsg.className = 'chat-message user';
            userMsg.innerHTML = `<div class="chat-bubble">${msg}</div>`;
            chatBody.appendChild(userMsg);
            chatBody.scrollTop = chatBody.scrollHeight;
            chatInput.value = '';
            // Simulate bot reply
            setTimeout(() => {
                const botMsg = document.createElement('div');
                botMsg.className = 'chat-message bot';
                botMsg.innerHTML = `<div class="chat-bubble">Thank you for your message! We'll get back to you soon.</div>`;
                chatBody.appendChild(botMsg);
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 900);
        });
            const speed = 200;
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                const count = parseInt(counter.innerText);
                const increment = Math.ceil(target / speed);
                
                if (count < target) {
                    counter.innerText = Math.min(count + increment, target);
                    setTimeout(animateCounter, 1);
                }
            });
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('stats-counter')) {
                        animateCounter();
                    }
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('.fade-in, .slide-up, .stats-counter').forEach(el => {
            observer.observe(el);
        });

        // Chat functionality
        const chatBtn = document.querySelector('.chat-widget-btn');
        const chatWindow = document.getElementById('chatWindow');
        const closeChatBtn = document.getElementById('closeChatBtn');
        const sendMessageBtn = document.getElementById('sendMessageBtn');
        const chatInput = document.getElementById('chatInput');
        const chatBody = document.getElementById('chatBody');

        chatBtn.addEventListener('click', () => {
            chatWindow.style.display = 'block';
            chatBtn.style.display = 'none';
            chatInput.focus();
        });

        closeChatBtn.addEventListener('click', () => {
            chatWindow.style.display = 'none';
            chatBtn.style.display = 'block';
        });

        function addMessage(text, isUser = false) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message');
            messageDiv.classList.add(isUser ? 'user' : 'bot');
            
            const messageContent = document.createElement('div');
            messageContent.classList.add('message-content');
            messageContent.textContent = text;
            
            messageDiv.appendChild(messageContent);
            chatBody.appendChild(messageDiv);
            chatBody.scrollTop = chatBody.scrollHeight;
        }

        sendMessageBtn.addEventListener('click', sendMessage);
        chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        function sendMessage() {
            const message = chatInput.value.trim();
            if (message) {
                addMessage(message, true);
                chatInput.value = '';
                
                // Simulate bot response
                setTimeout(() => {
                    addMessage("Thanks for your message! Our team will get back to you shortly. In the meantime, you might find answers to common questions in our FAQ section.");
                }, 1000);
            }
        }

        // Initialize counters to 0
        document.querySelectorAll('.stat-number').forEach(el => {
            el.innerText = '0';
        });
    </script>
</body>
</html>