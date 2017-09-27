<script type="text/javascript">


var conn = new WebSocket('ws://localhost:8090/echo');
conn.onmessage = function(e){ console.log(e.data); };
conn.onopen = () => conn.send('[Foo] Hello World!');

</script>