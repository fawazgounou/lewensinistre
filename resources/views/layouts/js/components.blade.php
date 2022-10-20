<script>

    // Check charater (-) in name agency and change by ( )
    function checkNameAgency(index=null){
        if(index===null){
            $('#name').val(  $('#name').val().replace('-',' ') )
        }else{
            $('#name-'+index).val(  $('#name-'+index).val().replace('-',' ') )
        }
    }

    // Modal alert template
    
    function modals_alert(id, type="default"){

        var color = type == 'success' ? '#57B657' : 
                    (type == 'warning' ? '#FFC100' : 
                    (type == 'danger' ? '#FF4747' : 
                        (type == 'info' ? '#248AFD' : '#f8f9fa')
                    ) 
                    );
        $('.main-panel').append(`
            <div class="modal fade" id="${id}" tabindex="-1" role="dialog" aria-labelledby="${id}Label" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content bg-light border-0 border-radius-modal">
                        <div class="modal-header" style="color:${color}">
                            <h5 class="modal-title" id="${id}Label"> <i class="mdi mdi-alert-octagon" style="font-size:30px;"></i> <span class="title_elmt"> l'article</span> </h5>
                            <button type="button" class="close" style="color:${color}; border-color:transparent;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:${color}; font-size:20px;">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="title_2" style="font-size:18px;">Message d'alerte</p>
                            <p class="desc_elmt" style="font-size:15px;"> </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                            <button type="button" id="btn-modal-continuous" onclick="action_modal()" class="btn btn-light">Continuer</button>
                        </div>
                    </div>
                </div>
            </div>
        `)

    }

    // All messages

    @if($message = Session::get('success'))
      var message = <?php echo json_encode($message); ?>;
      message_alert('success',message);
    @endif

    @if($message = Session::get('error'))
      var message = <?php echo json_encode($message); ?>;
      message_alert('danger',message);
    @endif

    @if($message = Session::get('warning'))
      var message = <?php echo json_encode($message); ?>;
      message_alert('warning',message);
    @endif

    @if($message = Session::get('info'))
      var message = <?php echo json_encode($message); ?>;
      message_alert('info',message);
    @endif

    // Default DataTable

    $("#table").DataTable({
        "responsive": true,
        "autoWidth": true,
        "paging" : true,
        "searching": true,
        "info":     true,
        "language" : {
            "url" : '{!!asset('/plugins/dataTable.french.lang')!!}'
        },
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -1 }
        ],
    });


    // Message for no access
    @if(Session::has('forbidden')) 
      message_alert('warning',"Vous n'avez pas les drois pour accéder à cette page !") 
    @endif


    // Template for statistics

    // Bar
    function statistics_bar(axe_X , axe_Y , label , color , border_color , barChartCanvas , border_width = 2) {

      var barChart = new Chart(barChartCanvas, {
              type: 'bar',
              data: {
                  labels: axe_X,
                  datasets: [{
                  label: label,
                  data: axe_Y,
                  backgroundColor: [
                      color,
                      color,
                      color,
                  ],
                  borderColor: [
                      border_color,
                      border_color,
                      border_color,
                  ],
                  borderWidth: border_width,
                      fill: true
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero: true
                          }
                      }]
                  },
                  legend: {
                      display: false
                  },
                  elements: {
                      point: {
                          radius: 0
                      }
                  }
              }
          });

    }

</script>