
<?php wp_footer(); ?>

<script>
    var morphing = anime({
        targets: '#morphing .polymorph',
        points: [
            { value: '70 41 118.574 59.369 111.145 132.631 60.855 84.631 20.426 60.369' },
            { value: '70 6 119.574 60.369 100.145 117.631 39.855 117.631 55.426 68.369' },
            { value: '70 57 136.574 54.369 89.145 100.631 28.855 132.631 38.426 64.369' },
            { value: '70 24 119.574 60.369 100.145 117.631 50.855 101.631 3.426 54.369' }
        ],
        easing: 'easeOutQuad',
        duration: 5000,
        loop: true
    });

</script>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
    //]]></script>


</body>
</html>
