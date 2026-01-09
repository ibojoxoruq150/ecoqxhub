<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoQxHub - Fresh Food Delivery Services | Organic Meals Delivered Fast</title>
    <meta name="description" content="EcoQxHub delivers fresh, organic meals straight to your door. Experience sustainable food delivery with locally sourced ingredients. Click here to continue exploring our eco-friendly meal options and join thousands of satisfied customers enjoying healthy, delicious food delivered within 30 minutes.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container-xyz789 {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .header-section-abc123 {
            background: rgba(255, 255, 255, 0.95);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-def456 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-ghi789 {
            font-size: 2rem;
            font-weight: bold;
            color: #2c5530;
            text-decoration: none;
        }

        .navigation-menu-jkl012 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-mno345 {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link-mno345:hover {
            color: #2c5530;
        }

        .hero-banner-pqr678 {
            margin-top: 80px;
            padding: 4rem 2rem;
            text-align: center;
            background: linear-gradient(rgba(44, 85, 48, 0.8), rgba(44, 85, 48, 0.8)), url('https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg') center/cover;
            color: white;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-title-stu901 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-vwx234 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button-yz567 {
            background: #ff6b35;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 0.5rem;
        }

        .cta-button-yz567:hover {
            background: #e55a2b;
            transform: translateY(-2px);
        }

        .content-section-abc890 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .feature-grid-def123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .feature-card-ghi456 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .feature-card-ghi456:hover {
            transform: translateY(-5px);
        }

        .feature-icon-jkl789 {
            width: 80px;
            height: 80px;
            background: #2c5530;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 2rem;
            color: white;
        }

        .section-title-mno012 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .about-section-pqr345 {
            background: rgba(255, 255, 255, 0.1);
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }

        .history-timeline-stu678 {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            margin: 2rem 0;
        }

        .timeline-item-vwx901 {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 10px;
            border-left: 5px solid #ff6b35;
        }

        .timeline-year-yz234 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c5530;
            margin-bottom: 0.5rem;
        }

        .reviews-container-abc567 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .review-card-def890 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .reviewer-name-ghi123 {
            font-weight: bold;
            color: #2c5530;
            margin-bottom: 0.5rem;
        }

        .star-rating-jkl456 {
            color: #ffd700;
            margin-bottom: 1rem;
        }

        .services-grid-mno789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .service-item-pqr012 {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
        }

        .service-image-stu345 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .footer-section-vwx678 {
            background: #2c5530;
            color: white;
            padding: 3rem 2rem 1rem;
            margin-top: 4rem;
        }

        .footer-grid-yz901 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-column-abc234 {
            margin-bottom: 2rem;
        }

        .footer-title-def567 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #ff6b35;
        }

        .contact-link-ghi890 {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
        }

        .contact-link-ghi890:hover {
            color: #ff6b35;
        }

        .popup-overlay-jkl123 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
        }

        .popup-content-mno456 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .close-button-pqr789 {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .close-button-pqr789:hover {
            color: #333;
        }

        .continue-link-stu012 {
            background: #2c5530;
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 25px;
            display: inline-block;
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .continue-link-stu012:hover {
            background: #1e3a21;
            transform: scale(1.05);
        }

        .specialty-section-vwx345 {
            background: rgba(255, 255, 255, 0.1);
            padding: 3rem 2rem;
            margin: 2rem 0;
            border-radius: 20px;
            backdrop-filter: blur(5px);
        }

        .process-steps-yz678 {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 2rem;
            margin: 3rem 0;
        }

        .step-item-abc901 {
            text-align: center;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            flex: 1;
            min-width: 200px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .step-number-def234 {
            background: #ff6b35;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .hero-title-stu901 {
                font-size: 2.5rem;
            }
            
            .navigation-menu-jkl012 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-container-def456 {
                flex-direction: column;
            }
        }
    </style>

    <style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

    
</head>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%31%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%31%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%31%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>

<body class="main-container-xyz789">
    <header class="header-section-abc123">
        <nav class="nav-container-def456">
            <a href="#home" class="logo-brand-ghi789">EcoQxHub</a>
            <ul class="navigation-menu-jkl012">
                <li><a href="#home" class="nav-link-mno345">Home</a></li>
                <li><a href="#services" class="nav-link-mno345">Services</a></li>
                <li><a href="#about" class="nav-link-mno345">About</a></li>
                <li><a href="#history" class="nav-link-mno345">History</a></li>
                <li><a href="#specialties" class="nav-link-mno345">Specialties</a></li>
                <li><a href="#process" class="nav-link-mno345">Process</a></li>
                <li><a href="#reviews" class="nav-link-mno345">Reviews</a></li>
                <li><a href="#contact" class="nav-link-mno345">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-banner-pqr678">
        <h1 class="hero-title-stu901">Fresh Food Delivered Fast</h1>
        <p class="hero-subtitle-vwx234">Experience the finest organic meals delivered straight to your doorstep. Our sustainable approach ensures every bite supports local farmers and your health.</p>
        <div>
            <a href="#services" class="cta-button-yz567">Explore Menu</a>
            <a href="#contact" class="cta-button-yz567">Order Now</a>
        </div>
    </section>

    <section id="services" class="content-section-abc890">
        <h2 class="section-title-mno012">Our Food Delivery Services</h2>
        <div class="services-grid-mno789">
            <div class="service-item-pqr012">
                <img src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg" alt="Organic Vegetables" class="service-image-stu345">
                <h3>Farm Fresh Vegetables</h3>
                <p>Handpicked organic vegetables sourced directly from local sustainable farms. Each delivery includes seasonal produce that's harvested within 24 hours of delivery.</p>
                <a href="#contact" class="continue-link-stu012">Click Here to Continue</a>
            </div>
            <div class="service-item-pqr012">
                <img src="https://images.pexels.com/photos/376464/pexels-photo-376464.jpeg" alt="Healthy Meals" class="service-image-stu345">
                <h3>Ready-to-Eat Meals</h3>
                <p>Nutritionist-approved meals prepared by certified chefs using only the freshest ingredients. Perfect for busy professionals who value health and convenience.</p>
                <a href="#about" class="continue-link-stu012">Click Here to Continue</a>
            </div>
            <div class="service-item-pqr012">
                <img src="https://images.pexels.com/photos/1435904/pexels-photo-1435904.jpeg" alt="Fruit Baskets" class="service-image-stu345">
                <h3>Seasonal Fruit Collections</h3>
                <p>Curated selections of the season's best fruits, including exotic varieties and traditional favorites. Each fruit is carefully inspected for ripeness and quality.</p>
                <a href="#specialties" class="continue-link-stu012">Click Here to Continue</a>
            </div>
        </div>

        <div class="feature-grid-def123">
            <div class="feature-card-ghi456">
                <div class="feature-icon-jkl789">🚚</div>
                <h3>Lightning Fast Delivery</h3>
                <p>Our advanced logistics network ensures your food arrives within 30 minutes of preparation. We use temperature-controlled vehicles to maintain freshness during transport.</p>
            </div>
            <div class="feature-card-ghi456">
                <div class="feature-icon-jkl789">🌱</div>
                <h3>Sustainable Sourcing</h3>
                <p>Every ingredient is sourced from certified organic farms within a 50-mile radius. We support regenerative agriculture practices that benefit both soil health and biodiversity.</p>
            </div>
            <div class="feature-card-ghi456">
                <div class="feature-icon-jkl789">👨‍🍳</div>
                <h3>Expert Preparation</h3>
                <p>Our culinary team consists of trained nutritionists and experienced chefs who create balanced meals that satisfy both taste and health requirements.</p>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-pqr345">
        <div class="content-section-abc890">
            <h2 class="section-title-mno012">About EcoQxHub</h2>
            <p style="color: white; font-size: 1.1rem; text-align: center; margin-bottom: 2rem;">
                EcoQxHub revolutionizes food delivery by combining cutting-edge technology with traditional farming wisdom. Our mission extends beyond mere convenience - we're building a sustainable food ecosystem that connects conscious consumers with responsible producers. Through innovative supply chain management and community partnerships, we've created a platform that delivers exceptional food while supporting environmental stewardship.
            </p>
            <p style="color: white; font-size: 1.1rem; text-align: center;">
                Our commitment to quality begins at the source. We work exclusively with farmers who practice regenerative agriculture, ensuring that every meal contributes to soil health and carbon sequestration. This approach not only produces more nutritious food but also helps combat climate change through sustainable farming practices.
            </p>
        </div>
    </section>

    <section id="history" class="content-section-abc890">
        <h2 class="section-title-mno012">Our Journey Through Time</h2>
        <div class="history-timeline-stu678">
            <div class="timeline-item-vwx901">
                <div class="timeline-year-yz234">2019</div>
                <h3>The Seed of an Idea</h3>
                <p>Founded by agricultural engineer Maria Rodriguez and software developer James Chen, EcoQxHub began as a small farmers market delivery service in Portland. The initial concept emerged from Maria's frustration with food waste in traditional supply chains and James's expertise in logistics optimization.</p>
            </div>
            <div class="timeline-item-vwx901">
                <div class="timeline-year-yz234">2020</div>
                <h3>Technology Integration</h3>
                <p>During the pandemic, we developed our proprietary freshness tracking system using IoT sensors and blockchain technology. This innovation allowed customers to trace their food from farm to table while ensuring optimal storage conditions throughout the delivery process.</p>
            </div>
            <div class="timeline-item-vwx901">
                <div class="timeline-year-yz234">2021</div>
                <h3>Regional Expansion</h3>
                <p>Expanded operations to cover the entire Pacific Northwest, partnering with over 150 local farms and food producers. Introduced our meal preparation kitchen staffed by nutritionists and chefs specializing in plant-based cuisine and sustainable cooking methods.</p>
            </div>
            <div class="timeline-item-vwx901">
                <div class="timeline-year-yz234">2022</div>
                <h3>Innovation Recognition</h3>
                <p>Received the Sustainable Business Award from the Green Commerce Association for our zero-waste packaging initiative and carbon-neutral delivery fleet. Launched our community garden program, providing seeds and guidance to customers interested in growing their own food.</p>
            </div>
            <div class="timeline-item-vwx901">
                <div class="timeline-year-yz234">2023</div>
                <h3>National Presence</h3>
                <p>Achieved nationwide coverage through strategic partnerships with regional organic distributors and local food cooperatives. Introduced AI-powered meal planning that considers individual nutritional needs, dietary restrictions, and seasonal ingredient availability.</p>
            </div>
        </div>
    </section>

    <section id="specialties" class="specialty-section-vwx345">
        <div class="content-section-abc890">
            <h2 class="section-title-mno012">Our Specialties</h2>
            <div class="feature-grid-def123">
                <div class="feature-card-ghi456">
                    <img src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg" alt="Specialty Grains" style="width: 100%; height: 150px; object-fit: cover; border-radius: 10px; margin-bottom: 1rem;">
                    <h3>Ancient Grain Collections</h3>
                    <p>Discover forgotten varieties of wheat, quinoa, and amaranth that our partner farms have rescued from extinction. These nutrient-dense grains offer unique flavors and superior nutritional profiles compared to modern commercial varieties.</p>
                </div>
                <div class="feature-card-ghi456">
                    <img src="https://images.pexels.com/photos/1435904/pexels-photo-1435904.jpeg" alt="Fermented Foods" style="width: 100%; height: 150px; object-fit: cover; border-radius: 10px; margin-bottom: 1rem;">
                    <h3>Artisanal Fermented Foods</h3>
                    <p>Traditional fermentation techniques create probiotics-rich foods that support digestive health. Our selection includes house-made kimchi, sauerkraut, kombucha, and seasonal fermented vegetables prepared using time-honored methods.</p>
                </div>
                <div class="feature-card-ghi456">
                    <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg" alt="Seasonal Preserves" style="width: 100%; height: 150px; object-fit: cover; border-radius: 10px; margin-bottom: 1rem;">
                    <h3>Seasonal Preservation</h3>
                    <p>Extend the harvest season with our collection of preserved foods including dehydrated fruits, pickled vegetables, and herb-infused oils. Each product captures peak-season flavors for year-round enjoyment.</p>
                </div>
            </div>
            <p style="color: white; text-align: center; margin-top: 2rem; font-size: 1.1rem;">
                Our specialty items represent the intersection of culinary tradition and modern nutrition science. We work with food anthropologists and nutritionists to rediscover traditional food preparation methods that maximize both flavor and health benefits. Each specialty product comes with detailed information about its origins, preparation methods, and nutritional advantages.
            </p>
        </div>
    </section>

    <section id="process" class="content-section-abc890">
        <h2 class="section-title-mno012">How We Deliver Excellence</h2>
        <div class="process-steps-yz678">
            <div class="step-item-abc901">
                <div class="step-number-def234">1</div>
                <h3>Farm Selection</h3>
                <p>Our agricultural specialists visit and certify farms based on soil health, biodiversity, and sustainable practices. Only farms meeting our strict environmental and quality standards join our network.</p>
            </div>
            <div class="step-item-abc901">
                <div class="step-number-def234">2</div>
                <h3>Harvest Coordination</h3>
                <p>Using predictive analytics and weather data, we coordinate harvests to ensure peak ripeness and nutritional content. Farmers receive real-time demand forecasts to minimize waste and maximize freshness.</p>
            </div>
            <div class="step-item-abc901">
                <div class="step-number-def234">3</div>
                <h3>Quality Inspection</h3>
                <p>Every item undergoes multi-point quality checks including visual inspection, nutritional testing, and freshness verification. Our quality assurance team uses advanced sensors to measure sugar content, acidity, and other quality indicators.</p>
            </div>
            <div class="step-item-abc901">
                <div class="step-number-def234">4</div>
                <h3>Temperature-Controlled Transport</h3>
                <p>Our delivery fleet uses GPS-tracked, climate-controlled vehicles that maintain optimal temperature and humidity for each food type. Real-time monitoring ensures perfect conditions from pickup to delivery.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="#reviews" class="continue-link-stu012">Click Here to Continue to Reviews</a>
        </div>
    </section>

    <section id="reviews" class="content-section-abc890">
        <h2 class="section-title-mno012">What Our Customers Say</h2>
        <div class="reviews-container-abc567">
            <div class="review-card-def890">
                <div class="star-rating-jkl456">★★★★★</div>
                <div class="reviewer-name-ghi123">Sarah Mitchell</div>
                <p>"The freshness of the vegetables is incredible! I can taste the difference in every bite. The delivery timing is perfect, and the packaging is completely compostable. EcoQxHub has transformed how my family eats."</p>
            </div>
            <div class="review-card-def890">
                <div class="star-rating-jkl456">★★★★★</div>
                <div class="reviewer-name-ghi123">Dr. Robert Kim</div>
                <p>"As a nutritionist, I appreciate the detailed information about each food's origin and nutritional profile. The ancient grains collection introduced my patients to foods they never knew existed. Exceptional service and education combined."</p>
            </div>
            <div class="review-card-def890">
                <div class="star-rating-jkl456">★★★★★</div>
                <div class="reviewer-name-ghi123">Elena Vasquez</div>
                <p>"The fermented foods have completely improved my digestive health. The variety changes seasonally, which keeps meals interesting. I love knowing that my food choices support local farmers and sustainable agriculture."</p>
            </div>
            <div class="review-card-def890">
                <div class="star-rating-jkl456">★★★★★</div>
                <div class="reviewer-name-ghi123">Marcus Thompson</div>
                <p>"Busy schedule made healthy eating difficult until I found EcoQxHub. The ready-to-eat meals are restaurant quality, and the ingredient sourcing is transparent. The mobile app makes ordering effortless."</p>
            </div>
            <div class="review-card-def890">
                <div class="star-rating-jkl456">★★★★★</div>
                <div class="reviewer-name-ghi123">Jennifer Walsh</div>
                <p>"The seasonal fruit collections are amazing! My kids now look forward to trying new varieties each month. The educational materials help them understand where food comes from and why sustainable farming matters."</p>
            </div>
            <div class="review-card-def890">
                <div class="star-rating-jkl456">★★★★★</div>
                <div class="reviewer-name-ghi123">Ahmed Hassan</div>
                <p>"The delivery drivers are knowledgeable about the products and always provide storage tips. The temperature-controlled delivery ensures everything arrives in perfect condition. Outstanding attention to detail throughout the entire process."</p>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-section-vwx678">
        <div class="footer-grid-yz901">
            <div class="footer-column-abc234">
                <h3 class="footer-title-def567">Contact Information</h3>
                <a href="tel:+15551234567" class="contact-link-ghi890">📞 (555) 123-4567</a>
                <a href="mailto:info@ecoqxhub.com" class="contact-link-ghi890">✉️ info@ecoqxhub.com</a>
                <p class="contact-link-ghi890">📍 2847 Sustainable Way, Portland, OR 97201</p>
                <p class="contact-link-ghi890">🕒 Daily: 6:00 AM - 10:00 PM</p>
            </div>
            <div class="footer-column-abc234">
                <h3 class="footer-title-def567">Service Areas</h3>
                <p class="contact-link-ghi890">Pacific Northwest Region</p>
                <p class="contact-link-ghi890">California Central Valley</p>
                <p class="contact-link-ghi890">Rocky Mountain States</p>
                <p class="contact-link-ghi890">Great Lakes Region</p>
                <p class="contact-link-ghi890">Northeast Corridor</p>
            </div>
            <div class="footer-column-abc234">
                <h3 class="footer-title-def567">Our Mission</h3>
                <p class="contact-link-ghi890">Connecting communities with sustainable food sources while supporting regenerative agriculture and environmental stewardship through innovative delivery solutions.</p>
            </div>
            <div class="footer-column-abc234">
                <h3 class="footer-title-def567">Legal</h3>
                <a href="#" onclick="showPrivacyPolicy()" class="contact-link-ghi890">Privacy Policy</a>
                <a href="#" onclick="showTermsOfService()" class="contact-link-ghi890">Terms of Service</a>
                <p class="contact-link-ghi890">© 2024 EcoQxHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Popup -->
    <div id="privacy-popup" class="popup-overlay-jkl123">
        <div class="popup-content-mno456">
            <span class="close-button-pqr789" onclick="closePopup('privacy-popup')">&times;</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last Updated:</strong> January 2024</p>
            
            <h3>Information Collection</h3>
            <p>EcoQxHub collects personal information including name, address, phone number, email, and payment details necessary for food delivery services. We also collect delivery preferences, dietary restrictions, and order history to improve service quality.</p>
            
            <h3>Information Usage</h3>
            <p>Collected information is used for order processing, delivery coordination, customer service, and service improvement. We analyze ordering patterns to optimize inventory and reduce food waste.</p>
            
            <h3>Information Sharing</h3>
            <p>We share necessary information with delivery partners, payment processors, and partner farms for order fulfillment. We never sell personal information to third parties for marketing purposes.</p>
            
            <h3>Data Security</h3>
            <p>We implement industry-standard security measures including encryption, secure servers, and regular security audits to protect customer information.</p>
            
            <h3>Cookie Policy</h3>
            <p>Our website uses cookies to enhance user experience, remember preferences, and analyze website traffic. Users can control cookie settings through their browser.</p>
            
            <h3>Contact Information</h3>
            <p>For privacy concerns, contact our Data Protection Officer at privacy@ecoqxhub.com or call (555) 123-4567.</p>
        </div>
    </div>

    <!-- Terms of Service Popup -->
    <div id="terms-popup" class="popup-overlay-jkl123">
        <div class="popup-content-mno456">
            <span class="close-button-pqr789" onclick="closePopup('terms-popup')">&times;</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 2024</p>
            
            <h3>Service Description</h3>
            <p>EcoQxHub provides organic food delivery services connecting customers with local sustainable farms and food producers. Services include fresh produce delivery, prepared meals, and specialty food items.</p>
            
            <h3>Order Terms</h3>
            <p>Orders must be placed through our website or mobile application. Minimum order requirements may apply based on delivery location. We reserve the right to modify or cancel orders due to product availability or weather conditions.</p>
            
            <h3>Delivery Policy</h3>
            <p>Delivery times are estimates and may vary due to weather, traffic, or high demand. Customers must be available to receive perishable deliveries. Unattended deliveries are at customer's risk.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment is due at time of order placement. We accept major credit cards and digital payment methods. Subscription services are billed automatically according to selected frequency.</p>
            
            <h3>Cancellation Policy</h3>
            <p>Orders can be cancelled up to 2 hours before scheduled delivery time. Subscription services can be paused or cancelled with 24-hour notice.</p>
            
            <h3>Quality Guarantee</h3>
            <p>We guarantee the freshness and quality of all delivered items. Customers should report quality issues within 24 hours of delivery for resolution.</p>
            
            <h3>Limitation of Liability</h3>
            <p>EcoQxHub's liability is limited to the cost of the delivered items. We are not responsible for indirect damages or losses resulting from service interruptions.</p>
        </div>
    </div>

    <script>
        function showPrivacyPolicy() {
            document.getElementById('privacy-popup').style.display = 'block';
        }

        function showTermsOfService() {
            document.getElementById('terms-popup').style.display = 'block';
        }

        function closePopup(popupId) {
            document.getElementById(popupId).style.display = 'none';
        }

        // Close popup when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('popup-overlay-jkl123')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>





