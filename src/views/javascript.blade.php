<script type="text/javascript">
    var oTable;
    jQuery(document).ready(function(){
        // dynamic table
        oTable = jQuery('.{{ $class }}').dataTable({
            @foreach ($options as $k => $o)
        {{ json_encode($k) }}: {{ json_encode($o) }},
        @endforeach
            @foreach ($callbacks as $k => $o)
        {{ json_encode($k) }}: {{ $o }},
        @endforeach
    });
    // custom values are available via $values array
    });
</script>