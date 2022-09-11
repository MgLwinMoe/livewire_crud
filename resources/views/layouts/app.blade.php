<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Livewire Project</title>
    @livewireStyles
</head>

<body>

    {{ $slot }}

    @livewireScripts
    <script>
        window.livewire.on('StudentAdded', () => {
            $('#addstudent').modal('hide');
            // console.log('Close')
        })

        window.livewire.on('studentupdated', () => {
            $('#editstudent').modal('hide');
        })

        window.livewire.on('fileupload', () => {
            $('#upload-form')[0].reset();
        })
        window.livewire.on('imagesupload', () => {
            $('#upload-images')[0].reset();
        })
    </script>
</body>

</html>
