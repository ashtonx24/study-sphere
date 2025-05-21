<?php
require_once '../../../../php/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study-Sphere</title>
  
  <!-- <link rel="stylesheet" href="/css/styles.css">  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="/study-sphere/assets/css/blog.css">
</head>
<body>
  <!-- Header Section -->
  <header class="d-flex justify-content-between align-items-center p-2">
    <div class="d-flex align-items-center">
      <button class="openbtn" onclick="openNav()">☰</button>
    </div>
    <div class="btn-group right-section">
      <button id="theme-toggle" class="theme-toggle-btn btn">☀️</button><!-- Theme Toggle Button -->
      <a href="/study-sphere/html/home.php" class="btn btn-primary mr-2">Home</a>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal">
        Logout
    </button>
    
    </div>
</header>

<!-- Logout Confirmation Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              Are you sure you want to logout?
          </div>
          <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary yes" id="confirmLogoutBtn">Yes</button>
                </div>
      </div>
  </div>
</div>


  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

  <!-- In-Page Navigation -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">On This Page</h4>
  <a href="#introduction">Introduction</a>
  <a href="#principles">Fundamental Principles</a>
  <a href="#financial-statements">Financial Statements</a>
  <a href="#double-entry">Double-Entry Bookkeeping</a>
  <a href="#key-ratios">Key Ratios & Metrics</a>
  <a href="#conclusion">Conclusion</a>

  <hr style="margin: 16px 32px;">

  <!-- Other Financial Topics -->
  <h4 style="margin-left: 32px; margin-bottom: 8px;">Other Financial Topics</h4>
  <a href="../chartered_accountant/blog1.php">Chartered Accountant</a>
  <a href="../financial_research_management/financial-risk-management.php">Financial Risk Management</a>
  <a href="../investment_banking/investment-banking.php">Investment Banking</a>
  <a href="../personal_finance_planning/personal-finance-planning.php">Personal Finance Planning</a>
  <a href="../corporate_finance/corporate-finance.php">Corporate Finance</a>
  <a href="../investment_analysis/investment-analysis.php">Investment Analysis</a>
  <a href="../financial_markets/financial-markets.php">Financial Markets</a>
  <a href="../accounting_basics/accounting-basics.php" class="active">Accounting Basics</a>
</div>


  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="blog-content">
    <h1>Accounting Basics</h1>
    <p>Accounting Basics introduce the principles and methods used to record, summarize, and interpret financial transactions. This page covers the fundamental concepts, statements, and techniques that form the foundation of modern accounting.</p>
    
    <h2 id="introduction">Introduction</h2>
    <p>Accounting is often called the “language of business” because it translates financial transactions into standardized reports. A solid grasp of accounting basics is crucial for making informed financial decisions, whether you’re an entrepreneur, investor, or student of finance.</p>
    
    <h2 id="principles">Fundamental Principles</h2>
    <p>Some key accounting principles include:</p>
    <ul>
      <li><strong>Accrual Principle:</strong> Revenues and expenses are recorded when they are earned or incurred, not necessarily when cash changes hands.</li>
      <li><strong>Consistency Principle:</strong> Using the same accounting methods over time for comparability.</li>
      <li><strong>Going Concern Principle:</strong> Assuming the business will continue operating indefinitely unless stated otherwise.</li>
    </ul>
    
    <h2 id="financial-statements">Financial Statements</h2>
    <p>Core financial statements include:</p>
    <ul>
      <li><strong>Balance Sheet:</strong> Shows a company’s assets, liabilities, and equity at a specific point in time.</li>
      <li><strong>Income Statement:</strong> Reports revenues, expenses, and net income over a period.</li>
      <li><strong>Cash Flow Statement:</strong> Illustrates how cash is generated and used within the business.</li>
    </ul>
    
    <h2 id="double-entry">Double-Entry Bookkeeping</h2>
    <p>Double-entry bookkeeping is the cornerstone of modern accounting. Key points include:</p>
    <ul>
      <li><strong>Debits and Credits:</strong> Each transaction affects at least two accounts to keep the accounting equation (Assets = Liabilities + Equity) in balance.</li>
      <li><strong>Journals and Ledgers:</strong> Transactions are first recorded in a journal, then posted to individual accounts in the ledger.</li>
      <li><strong>Trial Balance:</strong> A summary of all ledger accounts ensuring total debits equal total credits.</li>
    </ul>
    
    <h2 id="key-ratios">Key Ratios & Metrics</h2>
    <p>Financial ratios help interpret the data in financial statements. Common examples include:</p>
    <ul>
      <li><strong>Current Ratio:</strong> Measures liquidity by comparing current assets to current liabilities.</li>
      <li><strong>Return on Equity (ROE):</strong> Indicates how effectively a company uses equity to generate profit.</li>
      <li><strong>Profit Margin:</strong> Shows the percentage of revenue that remains as profit after all expenses.</li>
    </ul>
    
    <h2 id="conclusion">Conclusion</h2>
    <p>Accounting Basics are essential for understanding how businesses track and report financial performance. Mastering these concepts sets the stage for more advanced topics like managerial accounting, auditing, and financial analysis.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <ul class="pagination">
        <li class="page-item" id="prev-button"><a class="page-link" href="../financial_markets/financial-markets.php">Previous</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </div>
  </div>

  <!-- Scripts -->
  <script src="/study-sphere/assets/js/store.js"></script>
  <script src="/study-sphere/assets/js/blog.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>
