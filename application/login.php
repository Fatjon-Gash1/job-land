      <?php

      // Attempts left
      $attemptsLeft = $maxAttempts - $_SESSION['login_attempts'];

      if ($checklogin == 2 && isset($attemptsLeft) && $attemptsLeft > 0) {
        echo "<p style='color: red'>Incorrect username or password. You have " . $attemptsLeft . ($attemptsLeft == 1 ? ' try' : ' tries') . " left.</p>";

        // Update the login attempts and last attempt timestamp
        $_SESSION['login_attempts']++;
        $_SESSION['last_attempt_time'] = time();
      }
      // Check if the user has reached the maximum attempts within the lockout time
      elseif ($attemptsLeft == 0 && $_SESSION['login_attempts'] >= $maxAttempts) {
        echo "<p style='color: red' id='lockoutMessage'>Too many login attempts. Please try again later! <br>" .
          "<span style='color: red' id='countdown'></span></p>";

        echo "<script>
            var countdown = document.getElementById('countdown');
            var timeLeft = {$lockoutTime};

            function updateCountdown() {
                countdown.textContent = timeLeft + ' second' + (timeLeft === 1 ? '' : 's') + ' left.';
                    document.getElementById('submit').disabled = true;
                    document.getElementById('submit').style.cursor = 'not-allowed';
                    document.getElementById('submit').style.opacity = '0.5';
                if (timeLeft === 0) {
                    clearInterval(interval);
                    document.getElementById('lockoutMessage').style.display = 'none';
                    document.getElementById('submit').disabled = false;
                    document.getElementById('submit').style.cursor = 'pointer';
                    document.getElementById('submit').style.opacity = '1';
                  
                  // AJAX request to the PHP script
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'unset_attempts.php', true);

        xhr.send();
                }
                timeLeft--;
            }

            var interval = setInterval(updateCountdown, 1000);
          </script>";
      }
      ?>