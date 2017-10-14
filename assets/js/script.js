function search() {
  var input, filter, table, tr, td, i, x=1;
  input = document.getElementById("searchText");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  $('.notFound').remove();

  for (i = 0; i < tr.length; i++) {
    for(j=0;j<7;j++){
      td = tr[i].getElementsByTagName("td")[j];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          x=0;
          break;
        } else {
          tr[i].style.display = "none";
          x=1;
        }
      }
    }
  }
  if (x == 1) {
    $('#tableContent').append("<tr class='notFound'><td colspan='7' class='center'>Not found</td></tr>");
  }
}