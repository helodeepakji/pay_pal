<div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=Ad2ppq0Dg066JoiFJf7wyL48u1sE0Vyw74n5hAtiPCSkMtF5M-HhiepY00DMEkdnxABlUflBaqHZ_UM-&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
            style: {
                layout: 'horizontal'
            }
        }).render('#paypal-button-container');
    </script>
