<head>
    <link rel="stylesheet" href="../assets/css/alert.css">
</head>


<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">
      <div class="modal-header boja1">
        <button type="button" class="close" data-dismiss="modal">x</button>
      </div>
      <div class="modal-body">
        <p><?php echo $message; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
      </div>
    </div>

  </div>
</div>