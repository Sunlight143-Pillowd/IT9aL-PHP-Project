<?php 
// nav.php 
session_start();
?>
<div style="display:flex; gap:10px; flex-wrap:wrap; margin-bottom:16px;">
  <a href="/assessment_beginner/index.php">Dashboard</a>
  <a href="/assessment_beginner/pages/clients_list.php">Clients</a>
  <a href="/assessment_beginner/pages/services_list.php">Services</a>
  <a href="/assessment_beginner/pages/bookings_list.php">Bookings</a>
  <a href="/assessment_beginner/pages/tools_list.php">Tools</a>
  <a href="/assessment_beginner/pages/payments_list.php">Payments</a>
  <?php if (isset($_SESSION['username'])): ?>
    <a href="/assessment_beginner/pages/logout.php">Logout</a>
  <?php else: ?>
    <a href="/assessment_beginner/pages/login.php">Login</a>
  <?php endif; ?>
</div>
<hr>