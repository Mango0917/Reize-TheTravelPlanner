<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php //if($page['id']==6){
        //  echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
          //      <script type="text/javascript" src="index_pages/exercises.js"></script>';
      //}
?>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })

        $('#myModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_biceps').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_biceps').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_triceps').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_triceps').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_forearms').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_forearms').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

         $('#myModal_chest').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_chest').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_shoulders').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_shoulders').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_traps').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_traps').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_glutes').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_glutes').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_quadriceps').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_quadriceps').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_hamstrings').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_hamstrings').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_calves').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_calves').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })

        $('#myModal_cardio').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('name') // Extract info from data-* attributes
            var description = button.data('description')
            var video = button.data('video')
            //var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('#modalDescription').text(description)
            modal.find('#modalVideo_cardio').attr({ "src": video })
            //modal.find('.modal-body input').val(recipient)
        })
    })
</script>