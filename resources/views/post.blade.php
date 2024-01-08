<h1>admin post page</h1>
<div>
    <button id="decrement">-</button>
    <input type="number" id="counter" value="0">
    <button id="increment">+</button>
</div>

<script>
    $(document).ready(function() {
        let count = $('#counter');

        $(#increment).click(function() {
            $('#counter').value++;
        });

        // Allow only numeric input
        $('#counter').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
        });
    });
</script>
