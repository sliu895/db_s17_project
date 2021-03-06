<script type="text/javascript">
  function send_request(){
    $.get('../yourcongresspeople/congressperson_ajax.php', {'query' : $("#search").val(), 'order_column': $("#search_select").val()}, function(data){
        var response = JSON.parse(data);
        $("#search_result").html(response['html']);
        $("#result_length").text(response['length']);
      });
  }

  $(document).ready(function(){
    send_request();
    $("#search").on('input', function(){
      send_request();      
    });
    $("#search_select").on('input', function(){
      send_request();
    });
  });
</script>

<label>Search Other Congresspeople</label>
  <select class="form-control" id="search_select">
    <option value="name">Name</option>
    <option value="state">State</option>
  </select>
<label>Search By Name or State</label>
  <input type="text" class="form-control" id="search">
  <br>
<label>Number of Results</label>
  <label id="result_length"></label>
  
<div id="search_result" class="table-responsive">