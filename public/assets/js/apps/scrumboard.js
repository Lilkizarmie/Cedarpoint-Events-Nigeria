$(function() {

    /*
    =========================================
    |                                       |
    |          Variables Definations        |
    |                                       |
    =========================================
    */

    var Container = {
        scrumboard: $('.scrumboard'),
        card: $('.scrumboard .card')
    }

    // Containers
    var scrumboard = Container.scrumboard;
    var card = Container.card;


    // Make Task Sortable

    function $_taskSortable() {
        $('[data-sortable="true"]').sortable({
            connectWith: '.connect-sorting-content',
            items: ".card",
            cursor: 'move',
            placeholder: "ui-state-highlight",
            refreshPosition: true,
            stop: function( event, ui ) {
                var parent_ui = ui.item.parent().attr('data-section');

            },
            update: function( event, ui ) {
                console.log(ui);
                console.log(ui.item);
            }
        });
    }

    // Click on Add Task button to open the modal and more..

    function addTask() {
        $('.addTask').on('click', function(event) {
            event.preventDefault();
            getParentElement = $(this).parents('[data-connect="sorting"]').attr('data-section');
            $('.edit-task-title').hide();
            $('.add-task-title').show();
            $('[data-btnfn="addTask"]').show();
            $('[data-btnfn="editTask"]').hide();
            // $('.addTaskAccordion .collapse').collapse('hide');
            $('#addTaskModal').modal('show');
            $_taskAdd(getParentElement);
        });
    }

    // Get the range count value

    $('#progress-range-counter').on('input', function(event) {
        event.preventDefault();
        /* Act on the event */
        getRangeValue = $(this).val();
        $('.range-count-number').html(getRangeValue);
        $('.range-count-number').attr('data-rangeCountNumber', getRangeValue);
    });

    // Reset the input Values

    $('#addTaskModal, #addListModal').on('hidden.bs.modal', function (e) {
        $('input,textarea').val('');
        $('input[type="range"]').val(0);
        $('.range-count-number').attr('data-rangecountnumber', 0);
        $('.range-count-number').html(0);
    })


    function $_taskAdd( getParent ) {

        $('[data-btnfn="addTask"]').off('click').on('click', function(event) {

            getAddBtnClass = $(this).attr('class').split(' ')[1];

              var today = new Date();
              var dd = String(today.getDate()).padStart(2, '0');
              var mm = String(today.getMonth()); //January is 0!
              var yyyy = today.getFullYear();

              var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];

              today = dd + ' ' + monthNames[mm] + ', ' + yyyy;

            var $_getParent = getParent;


            var $_task = document.getElementById('s-task').value;
            var $_taskText = document.getElementById('s-text').value;

            var $_taskProgress = $('.range-count-number').attr('data-rangeCountNumber');

            if ($_taskText == '') {
                
                $html = '<div data-draggable="true" class="card task-text-progress" style="">'+
                            '<div class="card-body">'+

                                '<div class="task-header">'+
                                    
                                    '<div class="">'+
