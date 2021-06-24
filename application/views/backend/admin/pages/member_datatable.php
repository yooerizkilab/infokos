<script type="text/javascript">
    let tableMember;

    // Show Table
    $(document).ready(function() {
        tableMember = $('#tableMember').DataTable({
            processing: true,
            serverSide: true,
            order: [],
            ajax: {
                'url': "<?= base_url('backend/getuser/ajax_list') ?>",
                'type': "POST"
            },
            columnDefs: [{
                'targets': [0, -1],
                'orderable': false,
            }],
        });
    });

    // Reload Table
    function reload_table() {
        tableMenu.ajax.reload(null, false);
    }
</script>