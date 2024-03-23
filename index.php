<html lang="ru">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
      function copyFunction() {
        var range = document.createRange();
        range.selectNode(document.querySelector("#divText"));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
        $("#copyBtn").prop("disabled", true);
        $("#copyBtn").text("Скопировано!");
        
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Short</title>
</head>
<body>
    <center>
      <div style="padding: 300px;">
        <form method="POST" id="form">
            <label for="url" class="fs-3">Ваша ссылка</label><br>
            <input type="text" id="url" name="url" class="form-inline">
            <br>
            <button type="button" name="submitBtn" id="submitBtn" class="btn btn-success" style="margin-top: 10px; margin-bottom: 30px;">Сгенерировать</button>
        </form>
        
        <div id="firstDiv">
          <div id="divText" class="fs-5" style="margin-bottom: 10px;"></div>
          <button hidden="true" onclick="copyFunction()" id="copyBtn" class="btn btn-dark">Скопировать ссылку!</button>
        </div>
      </div>
    </center>
</body>
<script type="text/javascript">
      $("#submitBtn").on("click", function() {
        var url = $("#url").val().trim();
        $("#copyBtn").prop("disabled", false);
        $("#copyBtn").text("Скопировать ссылку!");
        if(url == "") {
          $("#divText").text("Вы не ввели ссылку!");
          $("#copyBtn").prop("hidden", true);
          return false;
        }

        $.ajax({
          url: 'request_ajax_data.php',
          type: 'POST',
          cache: false,
          data: {'url': url},
          dataType: 'html',
          success: function(data) {
            if (data) {
              $("#divText").text(data);
              $("#copyBtn").prop("hidden", false);
              $('form').trigger("reset");
            }else {
              alert('Что-то не получилось (ajax)')
            }
          } 
        });
      });
    </script>
</html>

<?php

?>