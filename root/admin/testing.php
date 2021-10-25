<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

<script>
    // Turn input element into a pond
    $('.my-pond').filepond();

    // Turn input element into a pond with configuration options
    $('.my-pond').filepond({
        allowMultiple: true,
    });

    // Set allowMultiple property to true
    $('.my-pond').filepond('allowMultiple', false);

    // Listen for addfile event
    $('.my-pond').on('FilePond:addfile', function(e) {
        console.log('file added event', e);
    });

    // Manually add a file using the addfile method
    $('.my-pond')
        .filepond('addFile', 'index.html')
        .then(function(file) {
            console.log('file added', file);
        });
</script>