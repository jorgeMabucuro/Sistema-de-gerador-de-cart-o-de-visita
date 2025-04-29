<?php if (isset($_SESSION['popup'])): ?>
<div id="popup" class="popup" style="display: none;">
  <div class="popup-content">
    <span class="close" onclick="fecharPopup()">&times;</span>
    <h2 id="popup-title"><?php echo $_SESSION['popup']['titulo']; ?></h2>
    <p id="popup-message"><?php echo $_SESSION['popup']['mensagem']; ?></p>
  </div>
</div>
<script>
  window.addEventListener('DOMContentLoaded', () => {
    document.getElementById('popup').style.display = 'block';
  });

  function fecharPopup() {
    document.getElementById('popup').style.display = 'none';
  }
</script>
<?php unset($_SESSION['popup']); ?>
<?php endif; ?>
