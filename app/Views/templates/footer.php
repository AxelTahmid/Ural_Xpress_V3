<script src="/assets/js/jquery-3.3.1.js"></script>
<script src="/assets/css/bootstrap4/js/bootstrap.bundle.js"></script>
<script src="/assets/DataTables/datatables.js"></script>
<script>
    function readImageData(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(id)
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script src="/assets/js/main.js"></script>


</body>

</html>